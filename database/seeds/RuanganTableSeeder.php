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
            'penanggung_jawab' => 1,
            'gedung_id' => 3,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '2',
            'nama_ruangan' => 'kelas_2A',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas2A',
            'penanggung_jawab' => 1,
            'gedung_id' => 3,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '3',
            'nama_ruangan' => 'kelas_3A',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas3A',
            'penanggung_jawab' => 1,
            'gedung_id' => 2,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '4',
            'nama_ruangan' => 'kelas_4A',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas4A',
            'penanggung_jawab' => 1,
            'gedung_id' => 2,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '5',
            'nama_ruangan' => 'kelas_3B',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas3B',
            'penanggung_jawab' => 1,
            'gedung_id' => 1,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '6',
            'nama_ruangan' => 'kelas_4B',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '2014/001/Kelas4B',
            'penanggung_jawab' => 1,
            'gedung_id' => 1,
            'kapasitas_orang' => 25
        ]);
    }
}
