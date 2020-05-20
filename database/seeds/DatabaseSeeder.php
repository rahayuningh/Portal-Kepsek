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
        // SUSUNAN DIBAWAH INI JANGAN DIUBAH !! NANTI ERROR

        $this->call(UsersTableSeeder::class);

        // Seeder Bagian Data Civitas
        $this->call(AgamaTableSeeder::class);
        $this->call(WilayahTableSeeder::class);
        $this->call(CivitasTableSeeder::class);
        $this->call(SiswaTableSeeder::class);
        $this->call(PegawaiTableSeeder::class);
        $this->call(TendikTableSeeder::class);
        $this->call(GuruTableSeeder::class);
        $this->call(PesanTableSeeder::class);

        // Seeder Bagian Pekerjaan Guru
        $this->call(TipeTableSeeder::class);
        $this->call(MataPelajaranTableSeeder::class);
        $this->call(TahunAjaranTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(KBMTableSeeder::class);
        // $this->call(PekerjaanGuruTableSeeder::class);

        // Seeder Bagian Inventaris
        $this->call(JenisRuanganTableSeeder::class);
        $this->call(JenisInventarisTableSeeder::class);
        $this->call(GedungTableSeeder::class);
        $this->call(RuanganTableSeeder::class);
        $this->call(KebutuhanBarangTableSeeder::class);
        $this->call(InventarisTableSeeder::class);
    }
}
