<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class BaseController extends Controller
{
    public function getIndex(Request $request){
                 
        return view('welcome');        
    }



    public function getCurrency(){
       

        if (isset($_GET['currency'])) {
            $car  = $_GET['currency'];
        } else {
            if (isset($_COOKIE['currency'])) {
                $car  = $_COOKIE['currency'];
            } else {
                $car  = 'USD';
            }
        }
        
        setcookie('currency', $_GET['currency'] , time()+3600, '/');
        
        if(isset($_GET['currency'])){
            return redirect('/');
        }
        
    }
}
