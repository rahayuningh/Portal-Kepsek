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
            $table->string('nama_jenis_inventaris',30)->unique();
            $table->string('kategori',20);
            $table->string('merek',20);
            $table->integer('harga_satuan');
            $table->string('ukuran',20);
            $table->string('bahan',20);
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
