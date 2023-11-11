<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RecordFactory extends Factory
{
    protected $model = Record::class;

    public function definition(): array
    {
        return [
            'business_name' => $this->faker->company(),
            'income' => $this->faker->randomNumber(),
            'expense' => $this->faker->randomNumber(),
            'debts' => $this->faker->randomNumber(),
            'assets' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
