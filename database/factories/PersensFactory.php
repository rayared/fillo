<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Persens;

class PersensFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persens::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'phone2' => $this->faker->word(),
            'phone3' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->word(),
            'user_id' => $this->faker->word(),
            'prtype_id' => $this->faker->word(),
        ];
    }
}
