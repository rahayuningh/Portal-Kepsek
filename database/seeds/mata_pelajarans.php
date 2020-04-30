<?php

use Illuminate\Database\Seeder;

class mata_pelajarans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_pelajarans')->insert([
            'kode_mapel' => 'MTK',
            'nama_mapel' => 'Matematika',
        ],[
            'kode_mapel' => 'SOS',
            'nama_mapel' => 'Sosiologi',
        ]);
    }
}
