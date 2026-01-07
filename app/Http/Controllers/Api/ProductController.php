<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(
            Product::with('currency')->get()
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'currency_id' => 'required|exists:currencies,id',
            'tax_cost' => 'required|numeric',
            'manufacturing_cost' => 'required|numeric',
        ]);

        return response()->json(
            Product::create($data), 201
        );
    }

    public function show($id)
    {
        return response()->json(
            Product::with(['currency','prices.currency'])->findOrFail($id)
        );
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(['message' => 'Product deleted']);
    }
}
