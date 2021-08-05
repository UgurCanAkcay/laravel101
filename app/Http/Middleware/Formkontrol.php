<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Formkontrol
{

    public function handle(Request $request, Closure $next)
    //request uzerine gelen veri duser sorun yoksa son isleme dogru gider

    //yapilan islemler tanimlama icin uzantiyi Kernel uzerinde belirtmek gerekli
    //'arakontrol' =>\App\Http\Middleware\Formkontrol::class,
    {
        if($request->metin=="elma")
        {
          return redirect()->back();
        }
        return $next($request);
    }
}
