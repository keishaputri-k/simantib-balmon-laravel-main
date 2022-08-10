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
        Schema::create('penanganan_gangguans', function (Blueprint $table) {
            $table->id();
            $table->string('upt');
            $table->string('no_isr');
            $table->string('no_surat_pengaduan');
            $table->string('tgl_surat_pengaduan');
            $table->string('tgl_terima_surat_pengaduan');
            $table->string('tgl_spt_pengukuran_karasteristik_frekuensi_radio');
            $table->string('uraian_kasus');
            $table->string('frekuensi_terganggu');
            $table->string('servis');
            $table->string('pihak_terganggu');
            $table->string('pihak_pengganggu');
            $table->string('latitude_pengganggu');
            $table->string('longitude_pengganggu');
            $table->string('latitude_terganggu');
            $table->string('longitude_terganggu');
            $table->string('keterangan');
            $table->string('tanggal_selesai_aduan');
            $table->string('status');
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
        Schema::dropIfExists('penanganan_gangguans');
    }
};
