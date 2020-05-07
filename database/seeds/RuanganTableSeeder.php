<?php

use App\Ruangan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangans')->delete();
        Ruangan::create([
            'id' => '1',
            'nama_ruangan' => 'kelas_1A',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas1A',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 3,
            'kapasitas_orang' => 25
        ]);
    }
}
