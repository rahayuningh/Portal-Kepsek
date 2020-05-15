<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->binary('jenis_kelamin');
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('photo')->nullable();
            $table->tinyInteger('agama_id');
            $table->integer('civitasable_id');
            $table->string('civitasable_type');
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
        Schema::dropIfExists('civitas');
    }
}
