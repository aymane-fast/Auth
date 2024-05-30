<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cin' => $this->faker->unique()->randomNumber(8),
            'password' => bcrypt('12345678'),
            //findes and id of a random fillier
            'fillier_id' => \App\Models\Fillier::all()->random()->id,
            'role' => 'user',
        ];
    }
}
