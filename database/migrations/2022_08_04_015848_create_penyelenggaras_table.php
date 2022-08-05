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
            $table->integer('no_penyelenggara');
            $table->string('nama_penyelenggara');
            $table->string('alamat_penyelenggara');
            $table->string('lantitude_penyelenggara');
            $table->string('longitude_penyelenggara');
            $table->string('frekuensi_penyelenggara');
            $table->string('bandwidth_penyelenggara');
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
