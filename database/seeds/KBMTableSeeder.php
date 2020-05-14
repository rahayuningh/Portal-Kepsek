<?php

use App\kbm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kbms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kbms')->delete();
        kbm::create(
            [
                'mata_pelajaran_id' => '101',
                'kelas_id' => '11',
                // 'stasuses' => '1',
                'guru_pengajar' => '12345',
                'semester' => '1'
            ]
        );
        kbm::create(
            [
                'mata_pelajaran_id' => '202',
                'kelas_id' => '21',
                // 'stasuses' => '1',
                'guru_pengajar' => '54321',
                'semester' => '2'
            ]
        );
    }
}
