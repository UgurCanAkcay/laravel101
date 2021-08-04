<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{

  function test($isim)
  {
    //1 return "PHP TR";
    //return view('ornek'); 1 ile aynı islevde
    //return "Merhaba " .$isim;

    return view('ornek',['ad'=>$isim]);
  }
}

//bunları otomatik tanımlar panelden yapınca
// php artisan make: controller Ornek bas harfi buyuk olmalı
