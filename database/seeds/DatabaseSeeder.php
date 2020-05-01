<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(GuruTableSeeder::class);
        $this->call(TendikTableSeeder::class);
        $this->call(SiswaTableSeeder::class);
        $this->call(PegawaiTableSeeder::class);
        $this->call(CivitasTableSeeder::class);
        $this->call(PesanTableSeeder::class);
    }
}
