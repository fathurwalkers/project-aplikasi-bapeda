<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataproduksiperkebunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataproduksiperkebunan', function (Blueprint $table) {
            $table->id();
            $table->string('produksi_tahun');
            $table->string('produksi_kecamatan');
            $table->string('produksi_jambu');
            $table->string('produksi_kakao');
            $table->string('produksi_kelapadalam');
            $table->string('produksi_kopi');
            $table->string('produksi_lada');
            $table->string('produksi_pala');
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
        Schema::dropIfExists('dataproduksiperkebunan');
    }
}
