<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Offices;

class OfficesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offices::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'officename' => $this->faker->word(),
            'startfinancedate' => $this->faker->dateTime(),
            'user_id' => $this->faker->word(),
            'office_id' => $this->faker->word(),
            'currencies_id' => $this->faker->word(),
        ];
    }
}
