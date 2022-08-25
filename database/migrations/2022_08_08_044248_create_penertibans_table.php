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
        Schema::create('penertibans', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_observasi');
            $table->string('nama_pengguna');
            $table->string('frekuensi');
            $table->string('subservice');
            $table->string('dinas');
            $table->string('jenis_pelanggaran');
            $table->string('kab_kota');
            $table->string('tindakan');
            $table->string('status');
            $table->string('tgl_operasi_stasiun');
            $table->string('no_isr');
            $table->string('no_surat_penindakan');
            $table->string('tgl_penindakan');
            $table->string('keterangan');
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
        Schema::dropIfExists('penertibans');
    }
};
