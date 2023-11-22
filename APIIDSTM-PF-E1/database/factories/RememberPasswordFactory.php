<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RememberPassword;

class RememberPasswordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RememberPassword::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_user' => $this->faker->numberBetween(-100000, 100000),
            'email' => $this->faker->safeEmail,
            'new_password' => $this->faker->word,
        ];
    }
}
