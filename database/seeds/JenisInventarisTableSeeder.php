<?php

use App\JenisInventaris;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisInventarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_inventariss')->delete();
        DB::table('jenis_inventariss')->insert([
            'nama_jenis_inventaris' => 'Meja'
        ]);
        DB::table('jenis_inventariss')->insert([
            'nama_jenis_inventaris' => 'Kursi'
        ]);
        DB::table('jenis_inventariss')->insert([
            'nama_jenis_inventaris' => 'Komputer'
        ]);
    }
}
