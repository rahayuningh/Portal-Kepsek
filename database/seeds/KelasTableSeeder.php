<?php

use App\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->delete();
        Kelas::create([
            'id' => 1,
            'nama_kelas' => 'VIIA',
            'kode_kelas' => '7A',
            'tahun_ajaran_id' => 1,
        ]);
        Kelas::create([
            'id' => 2,
            'nama_kelas' => 'VIIIA',
            'kode_kelas' => '8A',
            'tahun_ajaran_id' => 1,
        ]);
        Kelas::create([
            'id' => 3,
            'nama_kelas' => 'IXA',
            'kode_kelas' => '9A',
            'tahun_ajaran_id' => 2,
        ]);
        Kelas::create([
            'id' => 4,
            'nama_kelas' => 'VIIB',
            'kode_kelas' => '7B',
            'tahun_ajaran_id' => 2,
        ]);
        Kelas::create([
            'id' => 5,
            'nama_kelas' => 'VIIIB',
            'kode_kelas' => '8B',
            'tahun_ajaran_id' => 3,
        ]);
        Kelas::create([
            'id' => 6,
            'nama_kelas' => 'IXB',
            'kode_kelas' => '9B',
            'tahun_ajaran_id' => 3,
        ]);
    }
}
