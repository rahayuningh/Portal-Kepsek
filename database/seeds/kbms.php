<?php

use Illuminate\Database\Seeder;

class kbms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kbms')->insert([
            'id_mapel' => '101',
            'id_kelas' => '11',
            'id_stasuses' => '1',
            'id_guru' => '12345',
            'semester' => '1'
        ],[
            'id_mapel' => '202',
            'id_kelas' => '21',
            'id_stasuses' => '1',
            'id_guru' => '54321',
            'semester' => '2'
        ]
    );
    }
}
