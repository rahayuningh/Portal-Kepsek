<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisInventarissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_inventariss', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis_inventaris')->unique();
            $table->tinyInteger('kategori');
            $table->string('merk');
            $table->decimal('harga_satuan', 15, 2);
            $table->string('ukuran');
            $table->string('bahan');
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
        Schema::dropIfExists('jenis_inventariss');
    }
}
