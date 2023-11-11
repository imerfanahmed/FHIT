<?php

namespace App\Models;

use App\Services\CalculateFinancialHealth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory, CalculateFinancialHealth;

    protected $fillable = [
        'business_name',
        'income',
        'expense',
        'debts',
        'assets',
    ];

    public function getFinancialHealthScoreAttribute(): string
    {
        return $this->getCalc($this->income, $this->expense, $this->debts, $this->assets);
    }
}
