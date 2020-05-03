<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kbm');
            $table->unsignedBigInteger('mata_pelajaran');
            $table->unsignedBigInteger('kelas');
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('guru_pengajar');
            $table->tinyInteger('semester');
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
        Schema::dropIfExists('kbms');
    }
}
