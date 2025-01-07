<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'sku' => 150,
            'price' => fake()->numberBetween(20,5000),
            'stock_count' => fake()->numberBetween(10,1000),
            'reorder_level' => fake()->numberBetween(10, 419),
            'category_id' => fake()->numberBetween(1, 5),
            'vendor_id' =>fake()->numberBetween(1, 10),
            'status' =>fake()->randomElement(['available' , 'out of stock' , 'discontinued'])
        ];
    }
}
