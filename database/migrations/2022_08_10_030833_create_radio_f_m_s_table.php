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
        Schema::create('radio_f_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_stasiun_radio');
            $table->string('lokasi_pemancar');
            $table->string('frekuensi_terukur_mhz');
            $table->string('lokasi_pemancar_kecamatan');
            $table->string('kab_kota');
            $table->string('provinsi');
            $table->string('no_spt');
            $table->string('tanggal_spt');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('radio_f_m_s');
    }
};
