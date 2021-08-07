<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    //
    public function ekle()
    {
      DB::table("bilgiler")->insert([
        "metin"=>"Bakarsan bağ bakmazsan dağ olur."
      ]);
      /* insert into tabloadi values() yukarıdaki ile ayni islemi yapiyoruz. */
    }
    public function guncelle()
    {
      DB::table("bilgiler")->where("id",1)->update([
        "metin"=>"Bu metin alanı guncellendi."
      ]);
    }

    public function sil()
    {
      DB::table("bilgiler")->where("id",1)->delete();
    }
    public function bilgiler()
    {
    /*  $veriler=DB::table("bilgiler")->get();
      //herhangi bir şart belirtmeden eldeki bütün veriler okumak için bu şekilde get ile verileri okuma islemi yapılabilir.

     foreach ($veriler as $key => $bilgi) {
        echo $bilgi->metin;
        //Çıktı olarak id almak istersek echo $bilgi->id; diye belirtmemiz gerekir

        //Alttaki şekilde de yazarsak da önce id sonra metni yazdırır.
        echo $bilgi->id."".$bilgi->metin;
        echo "<br>";
        // code...
*/

      //Eger tek bir veri döndürmek/göstermek istersek;
        //for döngüsü kullanarak programı yormak yerine alttaki şekilde yazabiliriz.
          $veri=DB::table("bilgiler")->where("id",3)->first();
          echo $veri->metin;
      }

      //print_r($veriler);
    }
}
