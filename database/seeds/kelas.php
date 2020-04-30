<?php

use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama_kelas' => 'X1',
            'kode_kelas' => 'AB',
            'tahun_ajaran' => '2019/2019',
        ],[
            'nama_kelas' => 'XI1',
            'kode_kelas' => 'AC',
            'tahun_ajaran' => '2019/2019',
        ]
    );
    }
}
