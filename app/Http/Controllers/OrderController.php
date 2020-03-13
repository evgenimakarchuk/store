<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Auth;
use App\Order;

class OrderController extends Controller
{
    public function postIndex(OrderRequest $r){
        // dd($_POST);
        // dd($r->all());
        $r['user_id']=(Auth::guest())? 0 : Auth::user()->id;
        $r['status']='defoult';
        $r['basket']=$_COOKIE['basket'];
        Order::create($r->all());
        setcookie('basket','',time()-1,'/');
        return redirect()->back();
    }
}
