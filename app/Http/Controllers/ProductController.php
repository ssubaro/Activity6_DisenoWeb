<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
}

//añadido
public function index()
{
    return view('products.index');
}

public function create()
{
    return view('products.create');
}

public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}
//