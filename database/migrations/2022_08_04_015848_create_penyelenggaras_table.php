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
        Schema::create('penyelenggaras', function (Blueprint $table) {
            $table->id();
            $table->string('curr_lic_num');
            $table->integer('client_id');
            $table->string('application_id');
            $table->string('client_name');
            $table->string('freq');
            $table->string('subservice');
            $table->string('freq_pair');
            $table->string('bwidht');
            $table->string('eq_mdl');
            $table->string('stn_name');
            $table->string('stn_addr');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('city');
            $table->string('district');
            $table->string('province');
            $table->string('link_id');
            $table->string('stasiun_lawan');
            $table->string('corr_address');
            $table->string('merk_perangkat');
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
        Schema::dropIfExists('penyelenggaras');
    }
};
