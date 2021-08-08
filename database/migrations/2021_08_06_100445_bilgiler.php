<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bilgiler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilgiler', function (Blueprint $table) {
            $table->id();
            $table->text('metin')->nullable();
            $table->timestamps();
             /* id metin created_At  updated_at*/
        });
    }
    /*create table bilgiler*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilgiler');
    }
}