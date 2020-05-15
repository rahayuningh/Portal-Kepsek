<?php

use App\KBM;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KBMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kbms')->delete();
        KBM::create(
            [
                'id' => '1',
                'mata_pelajaran_id' => '1',
                'kelas_id' => '1',
                'guru_pengajar' => '1',
                'semester' => true
            ]
        );
        KBM::create(
            [
                'id' => '2',
                'mata_pelajaran_id' => '2',
                'kelas_id' => '2',
                'guru_pengajar' => '2',
                'semester' => false
            ]
        );
    }
}
