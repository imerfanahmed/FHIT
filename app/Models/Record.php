<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Record
 *
 * @property int $id
 * @property string $business_name
 * @property int $income
 * @property int $expense
 * @property int $debts
 * @property int $assets
 * @property float $financial_health_score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Database\Factories\RecordFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Record newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Record query()
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereAssets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereDebts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereExpense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereFinancialHealthScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Record whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
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

    //accessor and mutators for encrypting and decrypting all the data in the database

    public function setBusinessNameAttribute($value)
    {
        $this->attributes['business_name'] = encrypt($value);
    }

    public function getBusinessNameAttribute($value)
    {
        return decrypt($value);
    }

    public function setIncomeAttribute($value)
    {
        $this->attributes['income'] = encrypt($value);
    }

    public function getIncomeAttribute($value)
    {
        return decrypt($value);
    }

    public function setExpenseAttribute($value)
    {
        $this->attributes['expense'] = encrypt($value);
    }

    public function getExpenseAttribute($value)
    {
        return decrypt($value);
    }

    public function setDebtsAttribute($value)
    {
        $this->attributes['debts'] = encrypt($value);
    }

    public function getDebtsAttribute($value)
    {
        return decrypt($value);
    }

    public function setAssetsAttribute($value)
    {
        $this->attributes['assets'] = encrypt($value);
    }

    public function getAssetsAttribute($value)
    {
        return decrypt($value);
    }

    public function setFinancialHealthScoreAttribute($value)
    {
        $this->attributes['financial_health_score'] = encrypt($value);
    }

    public function getFinancialHealthScoreAttribute($value)
    {
        return decrypt($value);
    }
}
