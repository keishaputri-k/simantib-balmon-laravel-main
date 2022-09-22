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
        Schema::create('microwave_links', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('curr_lic_num');
            $table->string('link_id');
            $table->string('tanggal');
            $table->string('metode');
            $table->string('no_risalah_hasil');
            $table->string('stn_name');
            $table->string('stasiun_lawan');
            $table->string('koor_long');
            $table->string('koor_lat');
            $table->string('tx_mhz');
            $table->string('rx_mhz');
            $table->string('bw_mhz');
            $table->string('merk_perangkat');
            $table->string('sertifikat');
            $table->string('status');
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
        Schema::dropIfExists('microwave_links');
    }
};
