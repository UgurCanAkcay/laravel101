<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ornek;
use App\Http\Controllers\Deneme;


Route::get('/', function () {
    return view('welcome');
});

//Route:: get('/deneme', function(){return view ('ornek');});
//bu islem controller icerisinde de yapilabilir
// eger get yerine post ile cagirirsak hata mesaji aliriz.
// get methodu ile gelen istek yok, bu nedenle url ile tanımlama get degil post dur yani yalnizca get ile yapilmali



Route:: get("/phpturkiye/{isim}",[Ornek::class,'test']);
//web sayfasi uzerinde controller kullanimi&baglantisi
Route:: get("/url",[Deneme::class,'fonksiyonismi']);
//ustteki kalip seklinde
Route:: get("/web",[Yonet::class,'site'])->name('karegen');
