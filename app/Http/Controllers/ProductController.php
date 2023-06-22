<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('img', $name);
        }
        $product = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'image' => $path ?? null,
        ]);
        $product->save();
        return redirect()->route('index');

    }

}