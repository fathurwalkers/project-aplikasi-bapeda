<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuastanamduasTable extends Migration
{
    public function up()
    {
        Schema::create('luastanamdua', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kecamatan');
            $table->string('padi');
            $table->string('padi_sawah');
            $table->string('padi_ladang');
            $table->string('jagung');
            $table->string('jagung_hibrida');
            $table->string('jagung_lokal');
            $table->string('ubi_kayu');
            $table->string('ubi_jalar');
            $table->string('kacang_tanah');
            $table->string('kacang_kedelai');
            $table->string('kacang_hijau');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('luastanamdua');
    }
}
