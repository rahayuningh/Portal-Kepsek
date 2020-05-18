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
            'jumlah' => 30,  //seharusnya diisi App\kebutuhan_barang
            'jml_barang_baik' => 25,
            'jml_barang_krg_baik'=>5,
            'jml_barang_rsk'=>1,
            'jml_barang_dibutuhkan' => 5
        ]);
    }
}
