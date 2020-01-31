<?php

namespace App\Http\Controllers;

use App\Page;

class PageController extends Controller
{
    public function getIndex($url=null){
        $obj=Page::where('slug',$url)->first();
        return view('page',compact('obj'));
    }
}
