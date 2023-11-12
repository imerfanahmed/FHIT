<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'income',
        'expense',
        'debts',
        'assets',
        'financial_health_score',
    ];
}
