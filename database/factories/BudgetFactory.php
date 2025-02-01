<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Budget;
use App\Models\Offices;

class BudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Budget::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'budgettitel' => $this->faker->word(),
            'budgetpersent' => $this->faker->numberBetween(-10000, 10000),
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'office_id' => $this->faker->word(),
            'offices_id' => Offices::factory(),
        ];
    }
}
