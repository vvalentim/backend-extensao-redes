<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestEntry>
 */
class TestEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'signal_strength_2g' => fake()->randomFloat(2, -80, 0),
            'signal_strength_5g' => fake()->randomFloat(2, -100, -20),
            'speed_2g' => fake()->randomFloat(2, 10, 200),
            'speed_5g' => fake()->randomFloat(2, 200, 1000),
            'interference' => fake()->randomFloat(2, -100, 0),
        ];
    }
}
