<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pap5ghzs', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('alamat_lokasi_perangkat_pemancar');
            $table->string('koor_perangkat_lantitude');
            $table->string('koor_perangkat_longitude');
            $table->string('frekuensi');
            $table->string('merk_perangkat');
            $table->string('tipe_perangkat');
            $table->string('pic_nama');
            $table->string('pic_no_tlp');
            $table->string('pic_email');
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
        Schema::dropIfExists('pap5ghzs');
    }
};
