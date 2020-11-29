<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('namakecamatan');
            $table->string('jumlahsekolah');
            $table->string('jenjang_pendidikan');
            $table->string('statussekolahnegeri');
            $table->string('statussekolahswasta');
            $table->string('jumlahmuridperempuan');
            $table->string('jumlahmuridlaki');
            $table->string('gurupns');
            $table->string('gurunonpns');
            $table->string('jumlahgurulaki');
            $table->string('jumlahguruperempuan');
            $table->string('gurudtiga');
            $table->string('gurussatu');
            $table->string('gurusdua');
            $table->string('kondisisekolahbaik');
            $table->string('kondisisekolahrusak');
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
        Schema::dropIfExists('datapendidikan');
    }
}
