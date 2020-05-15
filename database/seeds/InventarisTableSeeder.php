<?php

use App\Inventaris;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventariss')->delete();
        DB::table('inventariss')->insert([
            'jenis_inventaris_id' => 1,
            'kode_inventaris' => '003G',
            'tgl_mulai_pakai' => '2019/03/15',
            'status_kelayakan' => 1,
            'ruangan_pemilik_id' => 1
        ]);
        DB::table('inventariss')->insert([
            'jenis_inventaris_id' => 2,
            'kode_inventaris' => '003H',
            'tgl_mulai_pakai' => '2019/03/15',
            'status_kelayakan' => 1,
            'ruangan_pemilik_id' => 1
        ]);
        DB::table('inventariss')->insert([
            'jenis_inventaris_id' => 3,
            'kode_inventaris' => '003I',
            'tgl_mulai_pakai' => '2019/03/15',
            'status_kelayakan' => 0,
            'ruangan_pemilik_id' => 1
        ]);
    }
}
