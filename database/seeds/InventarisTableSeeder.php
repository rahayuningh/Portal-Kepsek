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
        DB::table('inventaris')->delete();
        Inventaris::create([
            'id' => '1',
            'jenis_inventaris_id' => 1,
            'kode_inventaris' => '2020/003/Meja/001',
            'tgl_mulai_pakai' => '2020/03/19',
            'status_kelayakan' => 'Layak',
            'ruangan_pemilik_id' => 3
        ]);
    }
}
