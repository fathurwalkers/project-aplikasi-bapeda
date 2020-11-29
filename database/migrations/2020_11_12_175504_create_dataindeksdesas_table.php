<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataindeksdesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataindeksdesa', function (Blueprint $table) {
            $table->id();
            $table->string('namakecamatan');
            $table->string('namadesa');
            $table->string('statusdesa');
            $table->string('indeksdesamembangun');
            $table->string('tahun');
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
        Schema::dropIfExists('dataindeksdesa');
    }
}
