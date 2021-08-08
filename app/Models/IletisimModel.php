<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimModel extends Model
{
    use HasFactory;
    protected $table="iletisim";
    protected $table=["adsoyad","mail","telefon","metin","created_at","updated_at"];
}
