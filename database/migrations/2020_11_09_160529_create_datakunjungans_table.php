<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakunjungansTable extends Migration
{
    public function up()
    {
        Schema::create('datakunjungan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('mancanegara');
            $table->string('domestik');
            $table->string('jumlah');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('datakunjungan');
    }
}
