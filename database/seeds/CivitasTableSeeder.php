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
            'agama_id' => 1,
            'civitasable_id' => 1,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '2',
            'nama' => 'John Doe',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Malang, Jawa Timur',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 2,
            'civitasable_id' => 1,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '3',
            'nama' => 'Jimmy Neutron',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Jambi, Bangka Belitung',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 1,
            'civitasable_id' => 2,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '4',
            'nama' => 'Julia Herbe',
            'jenis_kelamin' => False,
            'tempat_lahir' => 'DKI Jakarta',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 3,
            'civitasable_id' => 2,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '5',
            'nama' => 'Maximus Nice',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Bogor',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 1,
            'civitasable_id' => 3,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '6',
            'nama' => 'Lexus',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Jambi, Bangka Belitung',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 1,
            'civitasable_id' => 3,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '7',
            'nama' => 'Nier Automata',
            'jenis_kelamin' => false,
            'tempat_lahir' => 'Jambi, Bangka Belitung',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 1,
            'civitasable_id' => 4,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '8',
            'nama' => 'Jeremy Teti',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Jambi, Bangka Belitung',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 1,
            'civitasable_id' => 5,
            'civitasable_type' => 'App\Siswa'
        ]);
        Civitas::create([
            'id' => '9',
            'nama' => 'Julius Caesar',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 2,
            'civitasable_id' => 4,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '10',
            'nama' => 'Napoleon',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 3,
            'civitasable_id' => 5,
            'civitasable_type' => 'App\Pegawai'
        ]);
        Civitas::create([
            'id' => '11',
            'nama' => 'Arthurion August',
            'jenis_kelamin' => True,
            'tempat_lahir' => 'Papua',
            'tanggal_lahir' => Carbon::today(),
            'agama_id' => 3,
            'civitasable_id' => 6,
            'civitasable_type' => 'App\Pegawai'
        ]);
    }
}
