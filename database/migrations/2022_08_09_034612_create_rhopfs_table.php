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
        Schema::create('rhopfs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_stasium_monitor');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('band');
            $table->string('pita_frekuensi');
            $table->string('frekuensi_mhz');
            $table->string('dinas');
            $table->string('sub_servis');
            $table->string('kelas_emisi');
            $table->string('kelas_stasiun');
            $table->string('azimuth');
            $table->string('level_dbz_m');
            $table->string('identifikasi');
            $table->string('legalitas');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('no_spt');
            $table->string('tgl_spt');
            $table->string('kecamatan');
            $table->string('jalan_lokasi');
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
        Schema::dropIfExists('rhopfs');
    }
};
