<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(Request $request){
       
        return view('welcome');
    }
}
