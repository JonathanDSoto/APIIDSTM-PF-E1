<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Rate;
use App\Models\Rental;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_cliente' => Client::factory(),
            'id_vehiculo' => $this->faker->numberBetween(-100000, 100000),
            'id_tarifa' => Rate::factory(),
            'initial_day' => $this->faker->dateTime(),
            'delivery_day' => $this->faker->dateTime(),
            'days' => $this->faker->numberBetween(-8, 8),
            'total' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
