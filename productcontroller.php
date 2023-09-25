<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products], 200);
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
        return response()->json(['product' => $product], 200);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['product' => $product], 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
        $product->update($request->all());
        return response()->json(['product' => $product], 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Produto excluído com sucesso'], 200);
    }
}
