<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $products = Product::simplePaginate(6);
        return view('index', compact('products'));
    }

    public function register()
    {
        return view('register');
    }

}
