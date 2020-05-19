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
            'kode'=>'A',
            'nama_jenis_ruangan' => 'Asrama'
        ]);
        JenisRuangan::create([
            'id' => '2',
            'kode'=>'O',
            'nama_jenis_ruangan' => 'Operasional'
        ]);
        JenisRuangan::create([
            'id' => '3',
            'kode'=>'S',
            'nama_jenis_ruangan' => 'Sekolah'
        ]);
    }
}
