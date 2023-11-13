<?php

namespace Tests\Feature;

use App\Livewire\CalculateForm;
use Livewire\Livewire;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testBasic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLivewireCalculatorComponent()
    {
        $this->get('/')
            ->assertSeeLivewire(CalculateForm::class);
    }

    public function testCalculation()
    {
        Livewire::test(CalculateForm::class)
            ->set('business_name', 'Erfan Ahmed Siam')
            ->set('monthly_income', 25000)
            ->set('monthly_expenses', 12000)
            ->set('debts', 2000)
            ->set('assets', 5000)
            ->call('calculateFinancialHealth')
            ->assertSee('Financial Health Score: 62.40%');
    }
}
