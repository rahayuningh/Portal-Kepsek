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
            'kode_inventaris' => '003G',
            'tgl_mulai_pakai' => '2019/03/15',
            'status_kelayakan' => 1,
            'ruangan_pemilik_id' => 3
        ]);
    }
}
