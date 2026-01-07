<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        Currency::insert([
            [
                'name' => 'US Dollar',
                'symbol' => '$',
                'exchange_rate' => 1.0000,
            ],
            [
                'name' => 'Euro',
                'symbol' => '€',
                'exchange_rate' => 0.92,
            ],
            [
                'name' => 'Indian Rupee',
                'symbol' => '₹',
                'exchange_rate' => 83.20,
            ],
            [
                'name' => 'British Pound',
                'symbol' => '£',
                'exchange_rate' => 0.78,
            ],
            [
                'name' => 'Japanese Yen',
                'symbol' => '¥',
                'exchange_rate' => 144.50,
            ],
        ]);
    }
}

