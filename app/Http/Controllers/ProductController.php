<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use View;

class ProductController extends Controller
{
    public function index(): view{
        $product = Product::latest()->paginate(perpage:10);
        return view ('product.index', data: compact(var_name:'product'));
    }
}
