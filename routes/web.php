<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ornek;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;



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


Route:: get("/modelliste",[Modelislemleri ::class,'liste']);
Route:: get("/modelekle",[Modelislemleri ::class,'ekle']);
Route:: get("/modelguncelle",[Modelislemleri ::class,'guncelle']);
Route:: get("/modelsil",[Modelislemleri ::class,'sil']);

Route:: get("/iletisim",[Iletisim ::class,'index']);
Route:: post("/iletisim-sonuc",[Iletisim ::class,'eklme'])->name("iletisim-sonuc");


Route::get('/upload', function(){
  return view('upload');
});
Route::post('/resim-ilet',[ResimYukle::class,'resimYukleme'])->name('yukle');


Route::get('/uye', function(){
  return view('uyelik');
});
Route::post('/uye-kayit',[App\Http\Controllers\Uyelikislemleri::class,'uyekayit'])->name('uyekayit');


Route::get('/tema/home', function(){
  return view('sayfalar.home');
});
Route::get('/tema/galeri', function(){
  return view('sayfalar.galeri');
});
Route::get('/tema/hizmetler', function(){
  return view('sayfalar.hizmetler');
});
Route::get('/tema/iletisim', function(){
  return view('sayfalar.iletisim');
});
Route::get('/tema/kurumsal', function(){
  return view('sayfalar.kurumsal');
});

Route::get('/resim', function(){
//insert islemi $img = Image::make('images/267.jpg')->resize(320, 240)->insert('images/267.jpg');
// kendi boyutunda gormek icin $img = Image::make('images/267.jpg');
/*
$img = Image::make('images/267.jpg')->resize(320, 240);
$img->save("php_oran.jpg");
return $img->response('jpg');
*/
$img = Image::make('yeniresim.jpg')->greyscale();
return $img->response('jpg');
//return view("resim");
});

Route::post("/yukle",funciton(){
  Image::make(request()->file('resim'))->resize(300, 200)->save('yeniresim.jpg');
})->name("yukle");
