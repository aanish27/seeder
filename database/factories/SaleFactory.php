<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
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
            'invoice_number' => fake()->creditCardNumber(),
            'customer_id' => fake()->numberBetween(1,1000),
            'sales_date' => $date,
            'total_amount' => fake()->numberBetween(5000 , 40999),
            'payment_status' => fake()->randomElement(['paid', 'pending' , 'refunded']),
            'payment_method' => fake()->randomElement(['credit card', 'cash' , 'paypal']),
            'shipping_address' => fake()->address(),
            'shipping_status' => fake()->randomElement(['shipped', 'pending', 'delivered']),
            'tax_amount' => fake()->numberBetween(100, 10000),
            'discount_amount' => fake()->numberBetween(100, 4000),
            'status' => fake()->randomElement(['completed', 'canceled', 'refunded']),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
