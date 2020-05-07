<?php

use App\Tipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipes')->delete();
        Tipe::create(
            [
                'id' => 1,
                'tipe' => 'UTS'
            ]
        );
        Tipe::create(
            [
                'id' => 2,
                'tipe' => 'UAS'
            ]
        );
    }
}
