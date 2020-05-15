<?php

use App\Pegawai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->delete();
        Pegawai::create([
            'id' => '1',
            'nik' => '111111111111',
            'email' => 'johndoe@gmail.com',
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Tendik'
        ]);
        Pegawai::create([
            'id' => '2',
            'nik' => '2222222222',
            'email' => 'juliaherbe@scb.id',
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Guru'
        ]);
        Pegawai::create([
            'id' => '3',
            'nik' => '3333333333',
            'email' => 'maximus@scb.id',
            'status_pegawai' => False,
            'pegawaiable_id' => 2,
            'pegawaiable_type' => 'App\Guru'
        ]);
        Pegawai::create([
            'id' => '4',
            'nik' => '4444444444',
            'email' => 'julcasear@scb.id',
            'status_pegawai' => True,
            'pegawaiable_id' => 3,
            'pegawaiable_type' => 'App\Guru'
        ]);
        Pegawai::create([
            'id' => '5',
            'nik' => '555555555555',
            'email' => 'napoleon@scb.id',
            'status_pegawai' => False,
            'pegawaiable_id' => 4,
            'pegawaiable_type' => 'App\Guru'
        ]);
        Pegawai::create([
            'id' => '6',
            'nik' => '66666666666',
            'email' => 'arthur@scb.id',
            'status_pegawai' => True,
            'pegawaiable_id' => 5,
            'pegawaiable_type' => 'App\Guru'
        ]);
    }
}
