<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Cache::remember('products', 600, function () {
            return Producto::all();
        });
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Producto::create($request->all());
        Cache::forget('products');
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Cache::remember("product_{$id}", 600, function () use ($id) {
            return Producto::findOrFail($id);
        });
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $product = Producto::findOrFail($id);
        $product->update($request->all());
        Cache::forget('products');
        Cache::forget("product_{$id}");
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Producto::findOrFail($id);
        $product->delete();
        Cache::forget('products');
        Cache::forget("product_{$id}");
        return response()->json(null, 204);
    }
}
