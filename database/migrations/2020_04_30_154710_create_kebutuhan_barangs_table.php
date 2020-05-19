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
<<<<<<< HEAD
            $table->integer('jumlah');
            $table->integer('baik');
            $table->integer('kurang_baik');
            $table->integer('rusak');
    
=======
            $table->integer('jumlah')->default(0);
            $table->integer('baik')->default(0);
            $table->integer('kurang_baik')->default(0);
            $table->integer('rusak')->default(0);
            // $table->integer('butuh')->default(0);
>>>>>>> f9a531f9bc9879ffed3de9d5c078b098b3436a5e
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
