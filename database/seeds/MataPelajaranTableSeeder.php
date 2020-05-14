<?php

use App\MataPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataPelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_pelajarans')->delete();
        MataPelajaran::create([
            'id' => 1,
            'kode_mapel' => 'MTK',
            'nama_mapel' => 'Matematika',
        ]);
        MataPelajaran::create([
            'id' => 2,
            'kode_mapel' => 'SOS',
            'nama_mapel' => 'Sosiologi',
        ]);
        MataPelajaran::create([
            'id' => 3,
            'kode_mapel' => 'BIO',
            'nama_mapel' => 'Biologi',
        ]);
        MataPelajaran::create([
            'id' => 4,
            'kode_mapel' => 'PKN',
            'nama_mapel' => 'Pendidikan Kewarganegaraan',
        ]);
    }
}
