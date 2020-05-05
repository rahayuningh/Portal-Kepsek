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
            'mata_pelajaran' => '101',
            'kelas' => '11',
            'stasuses' => '1',
            'guru_pengajar' => '12345',
            'semester' => '1'
        ],[
            'mata_pelajaran' => '202',
            'kelas' => '21',
            'stasuses' => '1',
            'guru_pengajar' => '54321',
            'semester' => '2'
        ]
    );
    }
}
