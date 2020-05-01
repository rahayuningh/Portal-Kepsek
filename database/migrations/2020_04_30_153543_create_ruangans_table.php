<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan',50)->unique();
            $table->unsignedBigInteger('jenis_ruangan_id');
            $table->string('kode_ruangan',50)->unique();
            $table->unsignedBigInteger('penanggung_jawab_id');
            $table->unsignedBigInteger('gedung_id');
            $table->integer('kapasitas_orang');
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
        Schema::dropIfExists('ruangan');
    }
}
