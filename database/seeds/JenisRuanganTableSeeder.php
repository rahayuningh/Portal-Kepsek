<?php

use App\JenisRuangan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisRuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_ruangans')->delete();
        JenisRuangan::create([
            'id' => '1',
            'nama_jenis_ruangan' => 'ruangan_kelas'
        ]);
        JenisRuangan::create([
            'id' => '2',
            'nama_jenis_ruangan' => 'ruangan_kantin'
        ]);
        JenisRuangan::create([
            'id' => '3',
            'nama_jenis_ruangan' => 'ruangan_tendik'
        ]);
    }
}
