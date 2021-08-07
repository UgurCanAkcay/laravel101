<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    //
    public function liste()
    {
      $bilgi=Bilgiler::whereId(2)->first();
      //$bilgi=Bilgiler::whereMetin("Bakarsan bağ bakmazsan dağ olur.")->first();
      //$bilgi=Bilgiler::where("id",2)->first();
      //  $bilgi=Bilgiler::whereId(2)->first();
      //id deki i küçük veya büyük olması tabloda fark etmeksizin her türlü büyük harfli olmalı
      $bilgi=Bilgiler::find(2);
      //id 2 olan çağırma
      echo $bilgi->metin;
    }
    public function ekle()
    {
      Bilgiler::create([
        "metin"=>"Model dosyasından eklendi.",
      ]);
    }

    public function guncelle()
    {
      Bilgiler::whereId(4)->updated([
        "metin"=>"Bu alan gunceldir.",
      ]);
    }

    public function sil()
    {
      Bilgiler::whereId(4)->delete();
    }
}
