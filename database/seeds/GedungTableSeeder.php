<?php

use App\Gedung;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GedungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gedung')->delete();
        Gedung::create([
            'id' => '1',
            'nama_gedung' => 'Gedung_Keuangan',
            'kode_gedung' => 'Keu/001'
        ]);
        Gedung::create([
            'id' => '2',
            'nama_gedung' => 'Gedung_Tendik',
            'kode_gedung' => 'Tendik/002'
        ]);
        Gedung::create([
            'id' => '3',
            'nama_gedung' => 'Gedung_KBM',
            'kode_gedung' => 'KBM/003'
        ]);
    }
}
