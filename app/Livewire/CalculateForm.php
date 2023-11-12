<?php

namespace App\Livewire;

use App\Models\Record;
use App\Services\CalculateFinancialHealth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CalculateForm extends Component
{
    use CalculateFinancialHealth, LivewireAlert;

    public $business_name;

    public $monthly_income;

    public $monthly_expenses;

    public $debts;

    public $assets;

    public function calculateFinancialHealth()
    {
        $this->getCalc($this->monthly_income, $this->monthly_expenses, $this->debts, $this->assets);
        $this->validate([
            'business_name' => 'required',
            'monthly_income' => 'required|numeric',
            'monthly_expenses' => 'required|numeric',
            'debts' => 'required|numeric',
            'assets' => 'required|numeric',
        ]);

        Record::create([
            'business_name' => $this->business_name,
            'income' => $this->monthly_income,
            'expense' => $this->monthly_expenses,
            'debts' => $this->debts,
            'assets' => $this->assets,
            'financial_health_score' => $this->financialHealthScore,
        ]);
        //        $this->resetFields();
        $this->alert('success', 'Financial Health Score Calculated and stored Successfully!');

//        reset fields
        $this->reset(['business_name', 'monthly_income', 'monthly_expenses', 'debts', 'assets']);
    }


    public function resetFields(): void
    {
        $this->reset(['business_name', 'monthly_income', 'monthly_expenses', 'debts', 'assets']);
    }

    public function render()
    {
        $columnChartModel = isset($this->financialHealthScore) ? $this->getColumnChartModel() : null;

        return view('livewire.calculate-form', ['columnChartModel' => $columnChartModel]);
    }
}
