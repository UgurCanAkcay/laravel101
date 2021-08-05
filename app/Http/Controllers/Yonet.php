<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    //
    public function site()
    {
       //gonderilen degerler dizi degisken olmak zorunda
       $data["yazi1"]="PHP TR";
       $data["yazi2"]="Web Sitemize Hosgeldiniz.";
       $data["yazi3"]="Hizmetlerimiz";
       $data["yazi4"]="Web Tasarım ve Yazılım Hizmetleri";
       $data["yazi5"]="Bize Ulaşın";
       $data["yazi6"]="";
       $data["yazi7"]="";
       return view('web',$data);
    }
}
