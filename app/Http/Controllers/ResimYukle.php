<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimYukleme(Request $request)
    {
      //Dosyanın tam ismini alır echo $request->resim->getClientOriginalName();
      //sadece uzantısını verir
      $resimadi=rand(0,1000).".".$request->resim->getClientOriginalExtension();
      $yukle=$request->resim->move(public_path('images'),$resimadi);
      //eger gerçek ismiyle yüklemek isterseniz
        //      $yukle=$request->resim->move(public_path('images'),$request->resim->getClientOriginalName());

    }
}
