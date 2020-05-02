<?php

use Illuminate\Database\Seeder;

class JenisInventarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_inventaris')->delete();
        JenisInventaris::create([
            'id' => '1',
            'nama_jenis_inventaris'=>'Meja'
        ]);
    }
}
