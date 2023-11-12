<?php

namespace App\Livewire;

use App\Models\Record;
use App\Services\CalculateFinancialHealth;
use Livewire\Component;

class CalculateForm extends Component
{
    use CalculateFinancialHealth;

    public $business_name;

    public $monthly_income;

    public $monthly_expenses;

    public $debts;

    public $assets;

    public function calculateFinancialHealth()
    {
        $this->getCalc($this->monthly_income, $this->monthly_expenses, $this->debts, $this->assets);
        Record::create([
            'business_name' => $this->business_name,
            'income' => $this->monthly_income,
            'expense' => $this->monthly_expenses,
            'debts' => $this->debts,
            'assets' => $this->assets,
            'financial_health_score' => $this->financialHealthScore,
        ]);
        //        dd($this->financialHealthScore);
    }

    public function render()
    {
        $columnChartModel = isset($this->financialHealthScore) ? $this->getColumnChartModel() : null;

        return view('livewire.calculate-form', ['columnChartModel' => $columnChartModel]);
    }
}
