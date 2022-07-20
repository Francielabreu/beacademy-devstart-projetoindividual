<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $products)
    {
        $this->model = $products;
    }

    public function index()
    {
        $products = Product::all();

        
        return view('products.index', compact('products'));

    }

    public function show($id)
    {

        
        if(!$products = Product::find($id))
          return redirect()->route('products.index');
          
        $title = 'Produto '.$products->name;

        return view('products.show', compact('products', 'title'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);
        return redirect()->route('products.index');
    }

    



}
