<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);

            return view('products.results')->with('products', $products);
        } else {
            $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);

            $products2 = Product::with('categories')->whereHas('categories', function ($query) {
                $query->whereSlug('electro-menagers', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);

            $products3 = Product::with('categories')->whereHas('categories', function ($query) {
                $query->whereSlug('vetements-hommes', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);

            $products4 = Product::with('categories')->whereHas('categories', function ($query) {
                $query->whereSlug('vetements-femmes', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);

            $products5 = Product::with('categories')->whereHas('categories', function ($query) {
                $query->whereSlug('informatique', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);

            $products6 = Product::with('categories')->whereHas('categories', function ($query) {
                $query->whereSlug('maisons-bureau', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
        }


        return view('products.index', compact('products', 'products2', 'products3', 'products4', 'products5', 'products6'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $stock = $product->stock === 0 ?'Indisponible' : 'Disponible';

        return view('products.show', [
            'product' => $product,
            'stock' => $stock
        ]);
    }

    public function search()
    {
        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');
        
        $products = Product::where('title', 'like', "%$q%")
                ->orWhere('description', 'like', "%$q%")
                ->paginate(6);

        return view('products.results')->with('products', $products);
    }
}
