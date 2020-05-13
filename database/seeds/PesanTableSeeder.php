<?php

use App\Pesan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PesanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesans')->delete();
        Pesan::create([
            'id' => '1',
            'penerima' => '1',
            'subject' => 'Ini Subjectnya 1',
            'konten' => 'Lorem ipsum dolor sit amet nicnedjan'
        ]);
        Pesan::create([
            'id' => '2',
            'penerima' => '1',
            'subject' => 'Ini Subjectnya 2',
            'konten' => 'Lorem ipsum dolor sit amet nicnedjan kedu ajadasnda'
        ]);
    }
}
