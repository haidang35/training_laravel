<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.index', [
            'productList' => $products
        ]);
    }
}
