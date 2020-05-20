<?php

use App\Inventaris;
use Carbon\Carbon;
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
            'kebutuhan_id' => 1,
            'kode_inventaris' => 'O-1-001-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 2,
            'keterangan' => "Barang pertama di tabel inventaris",
        ]);
        DB::table('inventariss')->insert([
            'kebutuhan_id' => 1,
            'kode_inventaris' => 'O-1-002-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 1,
            'keterangan' => "Barang kedua di tabel inventaris",
        ]);

        DB::table('inventariss')->insert([
            'kebutuhan_id' => 2,
            'kode_inventaris' => 'O-2-001-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 1,
            'keterangan' => "Barang ketiga di tabel inventaris",
        ]);
        DB::table('inventariss')->insert([
            'kebutuhan_id' => 2,
            'kode_inventaris' => 'O-2-002-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 0,
            'keterangan' => "Barang keempat di tabel inventaris",
        ]);

        DB::table('inventariss')->insert([
            'kebutuhan_id' => 3,
            'kode_inventaris' => 'O-3-001-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 2,
            'keterangan' => "Barang kelima di tabel inventaris",
        ]);
        DB::table('inventariss')->insert([
            'kebutuhan_id' => 3,
            'kode_inventaris' => 'O-3-002-OP-2020',
            'no_seri' => '123456789',
            'tgl_terima' => Carbon::today(),
            'anggaran' => 'OP',
            'status_kelayakan' => 0,
            'keterangan' => "Barang keenam di tabel inventaris",
        ]);
    }
}
