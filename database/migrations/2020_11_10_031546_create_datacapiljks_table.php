<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatacapiljksTable extends Migration
{
    public function up()
    {
        Schema::create('datacapiljk', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('tahun');
            $table->string('jenkel');
            $table->string('jumlah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datacapiljk');
    }
}
