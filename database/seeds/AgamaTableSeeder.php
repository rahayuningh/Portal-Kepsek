<?php

use App\Agama;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agamas')->delete();
        Agama::create([
            'id' => '1',
            'nama_agama' => 'Islam'
        ]);
        Agama::create([
            'id' => '2',
            'nama_agama' => 'Kristen'
        ]);
        Agama::create([
            'id' => '3',
            'nama_agama' => 'Budha'
        ]);
        Agama::create([
            'id' => '4',
            'nama_agama' => 'Hindu'
        ]);
        Agama::create([
            'id' => '5',
            'nama_agama' => 'Konghucu'
        ]);
    }
}
