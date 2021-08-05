<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formislemleri extends Controller
{
    //fonk-> sayfa
    //tum dinamiksel islemler, sınıf uzerindeki fonk uzerinden islemler yapılıyor-laravel-
    public function gorunum()
    {
      return view("form");
    }
    public function sonuc(Request $request)
    {
      return $request->metin;
      //return $request->metin;$_POST["metin"] forma erisim icin
      //MIDDLEWARE islemleri icin kullanıyoruz
      //gonderilen veriyi kontrol amacli olarak kullanilir

    }
}
