<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('frontend.product.index')->with('products', $products);
    }
    public function show($slug){
        $product = Product::where('slug', $slug)->first();
        if(!is_null($product)){
            return view('frontend.product.show', compact('product'));
        } else{
            session()->flash('errors', 'Sorry!!! There is no product by this URL...');
            return redirect()->route('products');
        }
    }
}
