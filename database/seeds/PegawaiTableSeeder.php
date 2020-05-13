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
            'nik' => '320001327918731283',
            'email' => 'johndoe@gmail.com',
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Tendik'
        ]);
        Pegawai::create([
            'id' => '2',
            'nik' => '42123138313912123',
            'email' => 'juliaherbe@scb.id',
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Guru'
        ]);
        Pegawai::create([
            'id' => '3',
            'nik' => '1903712',
            'email' => 'maximus@scb.id',
            'status_pegawai' => False,
            'pegawaiable_id' => 2,
            'pegawaiable_type' => 'App\Guru'
        ]);
    }
}
