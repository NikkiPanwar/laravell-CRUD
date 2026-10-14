<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller{
    

    public function index(){
        $products= Product::all();
        return view('product.index',['products'=>$products]);
    }

    public function create(){
        return view('product.create');
    }

    public function edit(Product $product){
        return view('product.edit',['product'=> $product]);
    }

    public function update(Product $product, Request $request){
        $data=$request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success','product update successfully');
        }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price' => 'required|numeric',
            'description'=>'required'
        ]);
        
        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success','product update successfully');
    }


    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','product delete successfully');
    
    }
}
