<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Banklist;

class BanklistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banklist::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'bankname' => $this->faker->word(),
            'bankimg' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
