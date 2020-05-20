<?php

use App\KebutuhanBarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KebutuhanBarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kebutuhan_barangs')->delete();

        KebutuhanBarang::create([
            'id' => '1',
            'jenis_inventaris_id' => 1,
            'ruangan_id' => 1,
            'jumlah' => 2,
            'baik' => 1,
            'kurang_baik' => 1,
            'rusak' => 0,
        ]);

        KebutuhanBarang::create([
            'id' => '2',
            'jenis_inventaris_id' => 2,
            'ruangan_id' => 1,
            'jumlah' => 2,
            'baik' => 0,
            'kurang_baik' => 1,
            'rusak' => 1,
        ]);

        KebutuhanBarang::create([
            'id' => '3',
            'jenis_inventaris_id' => 3,
            'ruangan_id' => 1,
            'jumlah' => 2,
            'baik' => 1,
            'kurang_baik' => 0,
            'rusak' => 1,
        ]);

        KebutuhanBarang::create([
            'id' => '4',
            'jenis_inventaris_id' => 1,
            'ruangan_id' => 2,
            'jumlah' => 0,
            'baik' => 0,
            'kurang_baik' => 0,
            'rusak' => 0,
        ]);

        KebutuhanBarang::create([
            'id' => '5',
            'jenis_inventaris_id' => 2,
            'ruangan_id' => 2,
            'jumlah' => 0,
            'baik' => 0,
            'kurang_baik' => 0,
            'rusak' => 0,
        ]);

        KebutuhanBarang::create([
            'id' => '6',
            'jenis_inventaris_id' => 3,
            'ruangan_id' => 2,
            'jumlah' => 0,
            'baik' => 0,
            'kurang_baik' => 0,
            'rusak' => 0,
        ]);
    }
}
