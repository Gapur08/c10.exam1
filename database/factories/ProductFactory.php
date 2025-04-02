<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Restaurant;
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
            'restaurant_id' => Restaurant::inRandomOrder(),
            'category_id' => Category::inRandomOrder(),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker-randomFloat(2, 5, 100),

            //
        ];
    }
}
