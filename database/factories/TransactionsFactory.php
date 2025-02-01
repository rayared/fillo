<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Transactions;

class TransactionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transactions::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'dateandtime' => $this->faker->dateTime(),
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'sourcetype' => $this->faker->numberBetween(-10000, 10000),
            'sourceid' => $this->faker->randomNumber(),
            'desttype' => $this->faker->numberBetween(-10000, 10000),
            'destid' => $this->faker->randomNumber(),
            'office_id' => $this->faker->word(),
            'category_id' => $this->faker->word(),
        ];
    }
}
