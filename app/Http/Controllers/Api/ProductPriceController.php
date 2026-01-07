<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    public function index($productId)
    {
        return response()->json(
            ProductPrice::with('currency')
                ->where('product_id', $productId)
                ->get()
        );
    }

    public function store(Request $request, $productId)
    {
        $data = $request->validate([
            'currency_id' => 'required|exists:currencies,id',
            'price' => 'required|numeric'
        ]);

        $data['product_id'] = $productId;

        return response()->json(
            ProductPrice::create($data), 201
        );
    }
}
