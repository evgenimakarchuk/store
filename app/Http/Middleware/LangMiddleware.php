<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            if(isset($_COOKIE['lang'])){
                $lang = $_COOKIE['lang'];
            }else{
                $def = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                if($def == 'ru'){
                    $lang = 'Rus';
                    return redirect('?lang=Rus');
                }elseif($def == 'fr'){
                    $lang = 'Fra';
                    return redirect('?lang=Fra');
                }else{
                    return redirect('?lang=Eng');
                    $lang = 'Eng';
                }

            }
        }
        setcookie('lang', $lang, time() + 3600);
        return $next($request);
    }
}
