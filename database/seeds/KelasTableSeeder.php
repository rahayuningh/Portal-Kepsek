<?php

use App\Kelas as AppKelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->delete();
        AppKelas::create([
            'id' => 1,
            'nama_kelas' => 'X1',
            'kode_kelas' => 'X1',
            'tahun_ajaran_id' => 1,
        ]);
        AppKelas::create([
            'id' => 2,
            'nama_kelas' => 'X2',
            'kode_kelas' => 'X2',
            'tahun_ajaran_id' => 1,
        ]);
        AppKelas::create([
            'id' => 3,
            'nama_kelas' => 'X3',
            'kode_kelas' => 'X3',
            'tahun_ajaran_id' => 2,
        ]);
        AppKelas::create([
            'id' => 4,
            'nama_kelas' => 'X4',
            'kode_kelas' => 'X4',
            'tahun_ajaran_id' => 2,
        ]);
        AppKelas::create([
            'id' => 5,
            'nama_kelas' => 'X5',
            'kode_kelas' => 'X5',
            'tahun_ajaran_id' => 3,
        ]);
        AppKelas::create([
            'id' => 6,
            'nama_kelas' => 'X6',
            'kode_kelas' => 'X6',
            'tahun_ajaran_id' => 3,
        ]);
    }
}
