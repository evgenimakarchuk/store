<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class DatalistController extends Controller
{
    public function postIndex(){
        // echo $_POST['list'];
   
        $objs=Product::where('name','LIKE','%'.$_POST['list'].'%')->get();

        return response()->json($objs);
    }
}
