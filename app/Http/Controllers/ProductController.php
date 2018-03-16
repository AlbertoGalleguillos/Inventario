<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    public function create() {
        return view('products.create');
    }

    public function edit() {
        return view('products.edit');
    }

    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store() {
        Product::create(request(['internal','value','description']));
        session()->flash('message', 'Producto Ingresado Correctamente.');
        return redirect ('/products');
    }
}
