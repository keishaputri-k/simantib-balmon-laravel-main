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
            $table->longText('upt');
            $table->longText('no_isr');
            $table->longText('no_surat_pengaduan');
            $table->longText('tgl_surat_pengaduan');
            $table->longText('tgl_terima_surat_pengaduan');
            $table->longText('tgl_spt_pengukuran_karasteristik_frekuensi_radio');
            $table->longText('uraian_kasus');
            $table->longText('frekuensi_terganggu');
            $table->longText('servis');
            $table->longText('pihak_terganggu');
            $table->longText('pihak_pengganggu');
            $table->longText('latitude_pengganggu');
            $table->longText('longitude_pengganggu');
            $table->longText('latitude_terganggu');
            $table->longText('longitude_terganggu');
            $table->longText('keterangan');
            $table->longText('tanggal_selesai_aduan');
            $table->longText('status');
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
