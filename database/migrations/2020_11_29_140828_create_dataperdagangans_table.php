<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataperdagangansTable extends Migration
{
    public function up()
    {
        Schema::create('dataperdagangan', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('pasar_aktif');
            $table->string('pasar_tidakaktif');
            $table->string('pasar_belumterpakai');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dataperdagangan');
    }
}
