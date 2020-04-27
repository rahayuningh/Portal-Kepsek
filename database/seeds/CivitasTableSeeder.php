<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CivitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('civitas')->insert([
            'nama' => 'John Doe',
            'nisn' => '9991234567',
            'asal_wilayah' => 'Dramaga',
            'id_kelas_1' => '11',
            'id_kelas_2' => '21',
            'id_kelas_3' => '31',
            'tempat_lahir' => 'Dramaga',
            'tanggal_lahir' => '1 Januari 2002',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
        ],[
            'nama_siswa' => 'Jane Doe',
            'nisn' => '0001234567',
            'asal_wilayah' => 'Jakarta',
            'id_kelas_1' => '12',
            'id_kelas_2' => '22',
            'id_kelas_3' => '32',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '31 Januari 2002',
            'agama' => 'Kristen',
            'jenis_kelamin' => 'Perempuan',
        ]
    );
    }
}
