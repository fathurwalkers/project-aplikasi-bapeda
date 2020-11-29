<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakoperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakoperasi', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kecamatan');
            $table->string('kud');
            $table->string('kpri');
            $table->string('koptani');
            $table->string('kopwan');
            $table->string('kopnel');
            $table->string('kopmu');
            $table->string('kop_tkbm');
            $table->string('kop_pontren');
            $table->string('kop_komite');
            $table->string('ksp');
            $table->string('kopker');
            $table->string('kopas');
            $table->string('primkop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datakoperasi');
    }
}
