<?php

use App\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->delete();
        Guru::create(
            [
                'id' => '1',
                'kelas_perwalian' => 1
            ]
        );
        Guru::create(
            [
                'id' => '2',
                'kelas_perwalian' => 2
            ]
        );
    }
}
