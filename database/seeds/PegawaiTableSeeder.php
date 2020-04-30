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
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Tendik'
        ]);
        Pegawai::create([
            'id' => '2',
            'nik' => '42123138313912123',
            'status_pegawai' => True,
            'pegawaiable_id' => 1,
            'pegawaiable_type' => 'App\Guru'
        ]);
    }
}
