<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Product;

class CatalogController extends Controller
{
    public function getOne($slug=null){
        $catalog = Category::where('slug',$slug)->first();
        if(!$catalog){
            $catalog = new Category; 
        }
        
        $catalogs = Category::where('parent_id',$catalog->id)->get();
        $products=[];
        foreach($catalogs as $cat){
            $products[]=Product::where('category_id',$cat->id)->get();
        }
        $products = Product::where('category_id',$catalog->id)->get();
              
        return view('category',compact('catalog','catalogs','products'));
        // $prods=Product::wtere('catalogs_id',$cat->id)->get();
        // array_push($products,$prods);
        
    }
    
}
