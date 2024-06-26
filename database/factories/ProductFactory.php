<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
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
        $categories_ids = Category::all()->pluck('id');

        return [
            'category_id' => fake()->randomElement($categories_ids),
            'name' => fake()->words(2, true),
            'description' => fake()->paragraphs(4, true),
            'image' => fake()->imageUrl(640, 480, 'cafè', true),
            'isbn' => fake()->randomNumber(7, true) . fake()->randomNumber(6, true),
            'price' => fake()->randomFloat(2, 20, 100),
            'featured' => 0
        ];
    }
}
