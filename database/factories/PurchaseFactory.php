<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date =  fake()->dateTimeBetween('-1 month', 'now');
        return [
            'invoice_number' => fake()->numberBetween(17300023, 19300023),
            'total_price' => fake()->numberBetween(10000, 100000),
            'purchase_date' => $date,
            'vendor_id' => fake()->numberBetween(1, 10),
            'qty' => fake()->numberBetween(1, 73),
            'item_id' => fake()->numberBetween(1, 20),
            'status' => fake()->randomElement(['peding', 'completed' , 'canceld']),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
