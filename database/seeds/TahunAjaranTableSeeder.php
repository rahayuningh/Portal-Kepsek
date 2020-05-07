<?php

use App\TahunAjaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahunAjaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_ajarans')->delete();
        TahunAjaran::create(
            [
                'id' => 1,
                'tahun_ajaran' => '2018/2019'
            ]
        );
        TahunAjaran::create(
            [
                'id' => 2,
                'tahun_ajaran' => '2019/2020'
            ]
        );
        TahunAjaran::create(
            [
                'id' => 3,
                'tahun_ajaran' => '2020/2021'
            ]
        );
    }
}
