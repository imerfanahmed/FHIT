<?php

namespace App\Services;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

trait CalculateFinancialHealth
{
    public float $financialHealthScore;
    public array $normalizedScores;
    public function getCalc($monthly_income, $monthly_expenses, $debts, $assets)
    {
        $disposableIncome = $monthly_income - $monthly_expenses;
        $debtToIncomeRatio = ($debts / $monthly_income) * 100;
        $savingsRate = (($monthly_income - $monthly_expenses) - $debts) / $monthly_income * 100;
        $netWorth = $assets - $debts;

        $weights = [
            'disposable_income' => 0.3,
            'debt_to_income_ratio' => 0.25,
            'savings_rate' => 0.2,
            'net_worth' => 0.25,
        ];

        $normalizedScores = $this->getNormalizedScores($disposableIncome, $debtToIncomeRatio, $savingsRate, $netWorth);

        return $this->financialHealthScore = number_format(collect($normalizedScores)
            ->map(fn($score, $metric) => $score * $weights[$metric])
            ->sum(),2);

    }

    protected function getNormalizedScores(mixed $disposableIncome, float|int $debtToIncomeRatio, float|int $savingsRate, mixed $netWorth): array
    {
       return $this->normalizedScores = [
            'disposable_income' => number_format(min(100, max(0, ($disposableIncome / max($this->monthly_income, 1)) * 100)),2) ,
            'debt_to_income_ratio' => number_format(min(100, max(0, 100 - $debtToIncomeRatio)),2),
            'savings_rate' => number_format(min(100, max(0, $savingsRate)),2) ,
            'net_worth' => number_format(min(100, max(0, ($netWorth / max($this->assets, 1)) * 100)),2),
        ];
    }

    protected function getColumnChartModel(): ColumnChartModel
    {
        return (new ColumnChartModel())
            ->setTitle('Financial Health Matrices(%)')
            ->addColumn('Disposable Income(%)', $this->normalizedScores['disposable_income'], '#f6ad55')
            ->addColumn('Debt to Income Ratio(%)', $this->normalizedScores['debt_to_income_ratio'], '#fc8181')
            ->addColumn('Savings Rate(%)', $this->normalizedScores['savings_rate'], '#90cdf4')
            ->addColumn('Net Worth(%)', $this->normalizedScores['net_worth'], '#68d391')
            ->setAnimated(true)
            ->withGrid()
            ->setXAxisVisible(true)
            ->setLegendVisibility(true)
            ->setDataLabelsEnabled(true)
            ->setColumnWidth(50);
    }
}
