<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebutuhanBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhan_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('jenis_inventaris_id');
            $table->integer('ruangan_id');
            $table->integer('jml_barang_shrsny');
            $table->integer('jml_barang_dibutuhk');
            $table->integer('jml_barang_opr');
            $table->integer('jml_barang_rsk');
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
        Schema::dropIfExists('kebutuhan_barang');
    }
}
