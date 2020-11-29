<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapopulasiternaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapopulasiternak', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->string('jenisternak');
            $table->string('jenishewan');
            $table->string('jumlahkeseluruhan');
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
        Schema::dropIfExists('datapopulasiternak');
    }
}
