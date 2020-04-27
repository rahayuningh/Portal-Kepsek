<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10);
            $table->string('asal_wilayah', 50);
            $table->unsignedBigInteger('id_kelas_1');
            $table->unsignedBigInteger('id_kelas_2');
            $table->unsignedBigInteger('id_kelas_3');
            $table->tinyInteger('status_keaktifan');
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
        Schema::dropIfExists('siswas');
    }
}
