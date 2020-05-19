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
            'nama_ruangan' => 'Ruangan Aula',
            'jenis_ruangan_id' => 2,
            'kode_ruangan' => '001A',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 3,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '2',
            'nama_ruangan' => 'Kelas 2A',
            'jenis_ruangan_id' => 3,
            'kode_ruangan' => '002A',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 3,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '3',
            'nama_ruangan' => 'kelas_3A',
            'jenis_ruangan_id' => 3,
            'kode_ruangan' => '003A',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 2,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '4',
            'nama_ruangan' => 'kelas_4A',
            'jenis_ruangan_id' => 3,
            'kode_ruangan' => '004A',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 2,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '5',
            'nama_ruangan' => 'Ruang Mushola Astra',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '003B',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 1,
            'kapasitas_orang' => 25
        ]);
        Ruangan::create([
            'id' => '6',
            'nama_ruangan' => 'Ruang Mushola Astri',
            'jenis_ruangan_id' => 1,
            'kode_ruangan' => '004B',
            'penanggung_jawab_id' => 1,
            'gedung_id' => 1,
            'kapasitas_orang' => 25
        ]);
    }
}
