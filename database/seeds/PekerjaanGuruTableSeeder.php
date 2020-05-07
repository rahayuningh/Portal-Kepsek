<?php

use App\PekerjaanGuru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanGuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan_gurus')->delete();
        PekerjaanGuru::create(
            [
                'id' => 1,
                'kbm_id' => 1,
                'tipe_id' => 1,
                'status_id' => 1
            ]
        );
        PekerjaanGuru::create(
            [
                'id' => 2,
                'kbm_id' => 1,
                'tipe_id' => 2,
                'status_id' => 1
            ]
        );
    }
}
