<?php

use Illuminate\Database\Seeder;

class stasuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stasuses')->insert([
            'status' => 'UTS',
        ],[
            'status' => 'UAS',
        ]);
    }
}
