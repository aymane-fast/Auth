<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word,
            'description'=>$this->faker->text,
            'hours'=>$this->faker->randomNumber(2),
            'fillier_id' => \App\Models\Fillier::all()->random()->id,
        ];
    }
}
