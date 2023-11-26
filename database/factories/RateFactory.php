<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Rate;

class RateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence,
            'tarifa' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
