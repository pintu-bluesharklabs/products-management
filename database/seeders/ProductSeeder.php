<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'MacBook Pro',
                'description' => 'Apple laptop',
                'price' => 2500,
                'currency_id' => 1,
                'tax_cost' => 250,
                'manufacturing_cost' => 1800,
            ],
            [
                'name' => 'iPhone 15',
                'description' => 'Apple smartphone',
                'price' => 1200,
                'currency_id' => 1,
                'tax_cost' => 120,
                'manufacturing_cost' => 800,
            ],
            [
                'name' => 'Samsung TV',
                'description' => '55 inch Smart TV',
                'price' => 900,
                'currency_id' => 1,
                'tax_cost' => 90,
                'manufacturing_cost' => 600,
            ],
            [
                'name' => 'Sony Headphones',
                'description' => 'Noise cancelling headphones',
                'price' => 350,
                'currency_id' => 1,
                'tax_cost' => 35,
                'manufacturing_cost' => 200,
            ],
            [
                'name' => 'Apple Watch',
                'description' => 'Smart watch',
                'price' => 600,
                'currency_id' => 1,
                'tax_cost' => 60,
                'manufacturing_cost' => 400,
            ],
        ]);
    }
}
