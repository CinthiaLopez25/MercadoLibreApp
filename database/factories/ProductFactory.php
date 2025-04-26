<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Product ' . fake()->unique()->word,
            'description' => fake()->sentence(10),
            'price' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
