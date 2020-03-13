<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;
use App\Product;

class AppComposer{
    
    public function compose(View $view){
        $v_url = $_SERVER['REQUEST_URI'];
        $v_url_arr = explode('/',$v_url);
        $v_cats = Category::whereNull('parent_id')->get();              
        $v_products = Product::orderBy('name')->get();
                    
        $view->with('v_cats',$v_cats)
             ->with('v_url',$v_url)
             ->with('v_url_arr',$v_url_arr)
             ->with('v_products',$v_products);
    }

}