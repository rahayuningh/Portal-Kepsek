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
            'wilayah_id' => '11',
            'id_kelas_1' => 1,
            'id_kelas_2' => 2,
            'id_kelas_3' => 3,
            'status_keaktifan' => 1,
        ]);
        Siswa::create([
            'id' => '2',
            'nisn' => '999000000',
            'wilayah_id' => '12',
            'id_kelas_1' => 1,
            'id_kelas_2' => 2,
            'id_kelas_3' => 3,
            'status_keaktifan' => 1,
        ]);
        Siswa::create([
            'id' => '3',
            'nisn' => '92183',
            'wilayah_id' => '13',
            'id_kelas_1' => 1,
            'id_kelas_2' => 2,
            'id_kelas_3' => 3,
            'status_keaktifan' => 1,
        ]);
        Siswa::create([
            'id' => '4',
            'nisn' => '1283190',
            'wilayah_id' => '11',
            'id_kelas_1' => 4,
            'id_kelas_2' => 5,
            'id_kelas_3' => 6,
            'status_keaktifan' => 1,
        ]);
        Siswa::create([
            'id' => '5',
            'nisn' => '999000000',
            'wilayah_id' => '12',
            'id_kelas_1' => 4,
            'id_kelas_2' => 5,
            'id_kelas_3' => 6,
            'status_keaktifan' => 1,
        ]);
    }
}
