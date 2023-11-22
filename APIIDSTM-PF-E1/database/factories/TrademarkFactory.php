<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Trademark;

class TrademarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trademark::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->word,
            'image' => $this->faker->text,
        ];
    }
}
