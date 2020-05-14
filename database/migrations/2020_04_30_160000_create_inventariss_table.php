<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventariss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_inventaris_id');
            $table->string('kode_inventaris',10)->unique();
            $table->date('tgl_mulai_pakai');
            $table->boolean('status_kelayakan');
            $table->unsignedBigInteger('ruangan_pemilik_id');
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
        Schema::dropIfExists('inventariss');
    }
}
