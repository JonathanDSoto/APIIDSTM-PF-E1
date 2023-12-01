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
            'categoria' => $this->faker->randomElement(['Clase A', 'Clase B', 'Clase C', 'Clase D', 'Clase E', 'Clase F', 'Clase G', 'Clase H', 'Clase I', 'Clase J', 'Clase K', 'Clase L', 'Clase M', 'Clase N', 'Clase O', 'Clase P', 'Clase Q', 'Clase R', 'Clase S']),
            'tarifa' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
