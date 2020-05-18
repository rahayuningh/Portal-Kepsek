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
        Schema::create('kebutuhan_barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_inventaris_id');
            $table->unsignedBigInteger('ruangan_id');
            $table->integer('jumlah');
            $table->integer('jml_barang_baik');
            $table->integer('jml_barang_krg_baik');
            $table->integer('jml_barang_rsk');
            $table->integer('jml_barang_dibutuhkan');
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
        Schema::dropIfExists('kebutuhan_barangs');
    }
}
