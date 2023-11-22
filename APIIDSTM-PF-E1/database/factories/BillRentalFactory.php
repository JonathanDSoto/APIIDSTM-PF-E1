<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BillRental;

class BillRentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BillRental::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_renta' => $this->faker->numberBetween(-100000, 100000),
            'metodo_pago' => $this->faker->randomElement(/** enum_attributes **/),
        ];
    }
}
