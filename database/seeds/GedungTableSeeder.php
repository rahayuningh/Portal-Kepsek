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
        DB::table('gedungs')->delete();
        Gedung::create([
            'id' => '1',
            'nama_gedung' => 'Gedung_Keuangan',
            'kode_gedung' => '001'
        ]);
        Gedung::create([
            'id' => '2',
            'nama_gedung' => 'Gedung_Tendik',
            'kode_gedung' => '002'
        ]);
        Gedung::create([
            'id' => '3',
            'nama_gedung' => 'Gedung_KBM',
            'kode_gedung' => '003'
        ]);
    }
}
