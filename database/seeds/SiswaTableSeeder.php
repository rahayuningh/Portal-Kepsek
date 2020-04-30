<?php

use App\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->delete();
        Siswa::create([
            'id' => '1',
            'nisn' => '9991234567',
            'asal_wilayah' => 'Kota Bogor',
            'id_kelas_1' => 11,
            'id_kelas_2' => 21,
            'id_kelas_3' => 31,
            'status_keaktifan' => 1,
        ]);
        Siswa::create([
            'id' => '2',
            'nisn' => '999000000',
            'asal_wilayah' => 'Kota Jambi',
            'id_kelas_1' => 12,
            'id_kelas_2' => 22,
            'id_kelas_3' => 32,
            'status_keaktifan' => 1,
        ]);
    }
}
