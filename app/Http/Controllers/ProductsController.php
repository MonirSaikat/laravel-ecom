<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();

            return DataTables::of($data) 
                ->addColumn('category', function (Product $product) {
                    return $product->category->name;
                })->addColumn('brand', function (Product $product) {
                return $product->brand->name;
            })
                ->make(true);
        }

        return view('dashboard.products.index');
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required'
        ]);

        $product = new Product($data);
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.'. $image->extension();
            $image->move(public_path('img/products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('dashboard.products.index')->with('success', 'Product added successfully');
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted'); 
    }

    public function show(Request $request, Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    public function edit(Request $request, Product $product)
    {
        return view('dashboard.products.edit', compact('product')); 
    }
}