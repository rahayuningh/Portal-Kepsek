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
        JenisInventaris::create([
            'id' => 1,
            'nama_jenis_inventaris' => 'Televisi',
            'kategori' => 1,
            'merk' => 'UNICAD',
            'harga_satuan' => '450000',
            'ukuran' => '1mx1mx0.5m',
            'bahan' => 'BESI + PLASTIK',
        ]);
        JenisInventaris::create([
            'id' => 2,
            'nama_jenis_inventaris' => 'Meja',
            'kategori' => 2,
            'merk' => 'SICFAE',
            'harga_satuan' => '200000',
            'ukuran' => '1mx1mx0.5m',
            'bahan' => 'KAYU',
        ]);
        JenisInventaris::create([
            'id' => 3,
            'nama_jenis_inventaris' => 'Gitar',
            'kategori' => 3,
            'merk' => 'YAMAHA',
            'harga_satuan' => '3000000',
            'ukuran' => '1.5mx0.5m',
            'bahan' => 'PLASTIK',
        ]);
    }
}
