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
            'id' => '1',
            'nama_jenis_inventaris' => 'Meja'
        ]);
    }
}
