<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ornek;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;



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
//form islemleri icin rota belirliyoruz
Route:: get("/form",[Formislemleri::class,'gorunum']);
//request islemi uzerinden veriyi aliriz -php de post mantigi ile ayni tip-
//middleware kontrol saglar;
  //eger kotnrolden sorunsuz gecerse bir sonraki adima gecer
//ornek olarak kullanicilarin uye girisinde; eger giris yaptiysa isleme devam etsin, giris yapilmadiysa giris asamasina gonderme
  //yani yukaridaki belirtilen durumda kullanicinin giris yapıp yapmamasini middleware sayesinde anlamis oluruz
Route:: middleware('arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');
//middleware u yukaridaki gibi route uzerinden yukaridaki gibi isimli olarak kullanabilmek icin;
    //kernel dosyasindaki routeMiddleware de anahtar kelime ile tanimlama yapilmasi gereklidir

Route:: get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route:: get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route:: get("/sil",[Veritabaniislemleri::class,'sil']);
Route:: get("/listele",[Veritabaniislemleri::class,'bilgiler']);
