<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    

    public function definition(): array
    {
        $categories = ["Device", "Accessory", "Home Appliance", "Fashion"];

        return [
            'name' => $categories[0],
            'slug' => fake()->slug(),
            'description' => fake()->sentence(),
            'image' => fake()->url(),
            'status' => fake()->randomElement(['active', 'inactive'])
        ];
    }
}
