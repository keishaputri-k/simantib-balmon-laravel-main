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
        Schema::create('tv_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('alamat');
            $table->string('no_spt');
            $table->string('tanggal_pelaksanaan');
            $table->string('penyelenggara_layanan');
            $table->string('kanal');
            $table->string('status');
            $table->string('frekuensi');
            $table->string('level');
            $table->string('bandwidth');
            $table->string('code_rate');
            $table->string('guard_interval');
            $table->string('Program_penyelenggaraan_1');
            $table->string('program_standar_1');
            $table->string('Program_penyelenggaraan_2');
            $table->string('program_standar_2');
            $table->string('Program_penyelenggaraan_3');
            $table->string('program_standar_3');
            $table->string('Program_penyelenggaraan_4');
            $table->string('program_standar_4');
            $table->string('Program_penyelenggaraan_5');
            $table->string('program_standar_5');
            $table->string('Program_penyelenggaraan_6');
            $table->string('program_standar_6');
            $table->string('Program_penyelenggaraan_7');
            $table->string('program_standar_7');
            $table->string('Program_penyelenggaraan_8');
            $table->string('program_standar_8');
            $table->string('Program_penyelenggaraan_9');
            $table->string('program_standar_9');
            $table->string('Program_penyelenggaraan_10');
            $table->string('program_standar_10');
            $table->string('Program_penyelenggaraan_11');
            $table->string('program_standar_11');
            $table->string('Program_penyelenggaraan_12');
            $table->string('program_standar_12');
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
        Schema::dropIfExists('tv_digitals');
    }
};
