<?php

namespace App\Livewire;

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
    }

    public function render()
    {
        $columnChartModel = isset($this->financialHealthScore) ? $this->getColumnChartModel() : null;
        return view('livewire.calculate-form',['columnChartModel' => $columnChartModel]);
    }
}
