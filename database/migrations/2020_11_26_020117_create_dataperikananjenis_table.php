<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataperikananjenisTable extends Migration
{
    public function up()
    {
        Schema::create('dataperikananjenis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('kecamatan');
            $table->string('rumput_laut');
            $table->string('mabe');
            $table->string('kerapu');
            $table->string('kuwe');
            $table->string('lobster');
            $table->string('bandeng');
            $table->string('nila');
            $table->string('lele');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dataperikananjenis');
    }
}
