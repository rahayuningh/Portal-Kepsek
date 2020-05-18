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
            'no_seri'=>'S-N2345678',
            'kode_inventaris' => 'S-5-027-OP-2017',
            'tgl_terima' => '2017/03/15',
            'status_kelayakan' => 1,
            'ruangan_pemilik_id' => 1
        ]);
        DB::table('inventariss')->insert([
            'jenis_inventaris_id' => 2,
            'no_seri'=>'K-M123413',
            'kode_inventaris' => 'O-1-073-OP-2017',
            'tgl_terima' => '2017/01/20',
            'status_kelayakan' => 1,
            'ruangan_pemilik_id' => 1
        ]);
        DB::table('inventariss')->insert([
            'jenis_inventaris_id' => 3,
            'no_seri'=>'L-X12345',
            'kode_inventaris' => 'O-1-033-S-2017',
            'tgl_terima' => '2017/03/15',
            'status_kelayakan' => 0,
            'ruangan_pemilik_id' => 1
        ]);
    }
}
