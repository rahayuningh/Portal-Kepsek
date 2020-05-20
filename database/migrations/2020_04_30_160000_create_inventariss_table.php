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
            $table->unsignedBigInteger('kebutuhan_id');
            $table->string('kode_inventaris', 15)->unique();
            $table->string('no_seri')->nullable();
            $table->date('tgl_terima');
            $table->string('anggaran', 2);
            $table->boolean('status_kelayakan');
            $table->text('keterangan')->nullable();
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
