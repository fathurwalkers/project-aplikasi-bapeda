<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatacapilmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacapilmp', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('tahun');
            $table->string('matapencaharian');
            $table->string('jumlahkk');
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
        Schema::dropIfExists('datacapilmp');
    }
}
