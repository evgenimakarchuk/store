<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ModalController extends Controller
{
    public function postIndex(){
        $id = (int) $_POST['id'];
        // echo $id;
        $obj = Product::find($id);
        return view('ajax.modal',compact('obj'));
    }
}
