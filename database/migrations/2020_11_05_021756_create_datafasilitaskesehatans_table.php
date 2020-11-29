<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatafasilitaskesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datafasilitaskesehatan', function (Blueprint $table) {
            $table->id();
            $table->string('fasilitas_kesehatan');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('jumlah');
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
        Schema::dropIfExists('datafasilitaskesehatans');
    }
}
