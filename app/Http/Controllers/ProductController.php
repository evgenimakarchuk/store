<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getOne($id=null){
        $product = Product::where('id',$id)->first();
        $products= Product::where('category_id',$product->category_id)->get();
        return view('product',compact('product','products'));
    }
}
