<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()

    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function findProductName(Request $request)
    {
        $data = Product::firstWhere('id', $request->id);
        return response()->json($data);
    }

    public function findProductPrice(Request $request)
    {
        $data = Product::firstWhere('id', $request->id);

        return response()->json($data);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $transaction = session()->get('transaction', []);

        if (isset($transaction[$id])) {
            $transaction[$id]['quantity']++;
        } else {

            $transaction[$id] = [

                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('transaction', $transaction);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
