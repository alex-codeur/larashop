<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
        } else {
            $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);
        }

        return view('products.index')->with('products', $products);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }
}
