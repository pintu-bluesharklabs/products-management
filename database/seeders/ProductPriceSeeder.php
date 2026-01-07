<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductPrice;

class ProductPriceSeeder extends Seeder
{
    public function run(): void
    {
        ProductPrice::insert([
            // Product 1
            ['product_id' => 1, 'currency_id' => 2, 'price' => 2300],
            ['product_id' => 1, 'currency_id' => 3, 'price' => 208000],

            // Product 2
            ['product_id' => 2, 'currency_id' => 2, 'price' => 1100],
            ['product_id' => 2, 'currency_id' => 3, 'price' => 99800],

            // Product 3
            ['product_id' => 3, 'currency_id' => 4, 'price' => 720],
        ]);
    }
}

