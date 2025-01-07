<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\User;
use App\Models\Vendor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $categories = ["Device", "Accessory", "Home Appliance", "Fashion"];
        Vendor::factory(10)->create();
        foreach ($categories as $category) {
            Category::make(['name' => $category]);
        };

        $items = [
            0 => ["Smartphone", "Laptop", "Tablet", "Smartwatch"],
            1 => ["Phone Case", "Laptop Bag", "Headphones", "Charging Cable"],
            2 => ["Refrigerator", "Microwave", "Air Conditioner", "Washing Machine"],
            3 => ["T-shirt", "Jeans", "Sneakers", "Handbag"],
            4 => ["Tent", "Camping Chair", "Backpack", "Hiking Boots"]
        ];

        for ($i=0; $i < 5; $i++) {
            for ($j=0; $j < 4 ; $j++) {
                Item::factory()->make(['name' => $items[$i][$j],
                                        'category_id' => $i+1
            ]);
            };
        };
        Purchase::factory(1000)->create();
        Customer::factory(1000)->create();
        Sale::factory(20000)->create();
    }
}
