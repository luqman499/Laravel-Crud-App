<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        //   $product = new Product();
// $product->name = $request->name;
// $product->qty = $request->qty;
// $product->price = $request->price;
// $product->save();

        $data = $request->validate([
            'name' => 'required|string',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $product = Product::create($data);

        return redirect(route('product.index'));
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }
}
