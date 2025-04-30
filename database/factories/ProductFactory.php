<?php

namespace Database\Factories;

use App\Models\Category;
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
        $amount_categories = Category::count();
        if ($amount_categories == 0) {
            Category::factory()->count(10)->create();
        }
        $id = fake()->numberBetween(1, $amount_categories);
        $category_id = Category::where('id', '=', $id)->first()->id;
        return [
            'id_category' => $category_id,
            'name' => 'Product ' . fake()->unique()->word,
            'description' => fake()->sentence(10),
            'price' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
