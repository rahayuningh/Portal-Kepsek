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
            'nama_jenis_inventaris' => 'Meja',
            'kategori'=>'furniture',
            'merek'=>'Ace',
            'harga_satuan'=>'115000',
            'ukuran'=>'120x50x90',
            'bahan'=>'kayu'
        ]);
        DB::table('jenis_inventariss')->insert([
            'nama_jenis_inventaris' => 'komputer',
            'kategori'=>'elektronik',
            'merek'=>'Asus',
            'harga_satuan'=>'2150000',
            'ukuran'=>'15x15',
            'bahan'=>'alumunium'
        ]);
        DB::table('jenis_inventariss')->insert([
            'nama_jenis_inventaris' => 'lampu',
            'kategori'=>'elektronik',
            'merek'=>'Maspion',
            'harga_satuan'=>'15000',
            'ukuran'=>'12',
            'bahan'=>'plastik'
        ]);
    }
}
