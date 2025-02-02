<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Userbanks;

class UserbanksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userbanks::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'codehesab' => $this->faker->word(),
            'sh_hesab' => $this->faker->word(),
            'sh_card' => $this->faker->word(),
            'sh_sheba' => $this->faker->word(),
            'type' => $this->faker->word(),
            'has_check' => $this->faker->boolean(),
            'balance' => $this->faker->randomFloat(0, 0, 9999999999.),
            'office_id' => $this->faker->word(),
            'banklist_id' => $this->faker->word(),
        ];
    }
}
