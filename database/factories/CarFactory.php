<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;
use App\Models\Category;
use App\Models\Rate;
use App\Models\Trademark;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->word,
            'id_marca' => Trademark::factory(),
            'id_categoria' => Category::factory(),
            'is_avaliable' => $this->faker->boolean,
            'tarifa' => Rate::factory()->create()->tarifa,
            'image' => $this->faker->text,
        ];
    }
}
