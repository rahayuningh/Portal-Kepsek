<?php

use App\Civitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CivitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('civitas')->delete();
        Civitas::create([
            'id' => '1',
            'nama' => 'Mary Jane',
            'jenis_kelamin' => False,
            'tempat_lahir' => 'Bogor, Jawa Barat',
            'tanggal_lahir' => Carbon::today(),
            'agama' => 1,
            'civitasable_id' => 1,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '2',
            'nama' => 'John Doe',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Malang, Jawa Timur',
            'tanggal_lahir' => Carbon::today(),
            'agama' => 2,
            'civitasable_id' => 1,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '3',
            'nama' => 'Jimmy Neutron',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Jambi, Bangka Belitung',
            'tanggal_lahir' => Carbon::today(),
            'agama' => 1,
            'civitasable_id' => 2,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '4',
            'nama' => 'Julia Herbe',
            'jenis_kelamin' => False,
            'tempat_lahir' => 'DKI Jakarta',
            'tanggal_lahir' => Carbon::today(),
            'agama' => 3,
            'civitasable_id' => 2,
            'civitasable_type' => 'App\Pegawai'
        ]);
    }
}
