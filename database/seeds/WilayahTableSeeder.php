<?php

use App\Wilayah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayahs')->delete();
        Wilayah::create(
            [
                'id' => '11',
                'nama_daerah' => 'Aceh'
            ]
        );
        Wilayah::create(
            [
                'id' => '12',
                'nama_daerah' => "Sumatera Utara"
            ]
        );
        Wilayah::create(
            [
                'id' => '13',
                'nama_daerah' => "Sumatera Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '14',
                'nama_daerah' => "Riau"
            ]
        );
        Wilayah::create(
            [
                'id' => '15',
                'nama_daerah' => "Jambi"
            ]
        );
        Wilayah::create(
            [
                'id' => '16',
                'nama_daerah' => "Sumatera Selatan"
            ]
        );
        Wilayah::create(
            [
                'id' => '17',
                'nama_daerah' => "Bengkulu"
            ]
        );
        Wilayah::create(
            [
                'id' => '18',
                'nama_daerah' => "Lampung"
            ]
        );
        Wilayah::create(
            [
                'id' => '19',
                'nama_daerah' => "Kepulauan Bangka Belitung"
            ]
        );
        Wilayah::create(
            [
                'id' => '21',
                'nama_daerah' => "Kepulauan Riau"
            ]
        );
        Wilayah::create(
            [
                'id' => '31',
                'nama_daerah' => "Dki Jakarta"
            ]
        );
        Wilayah::create(
            [
                'id' => '32',
                'nama_daerah' => "Jawa Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '33',
                'nama_daerah' => "Jawa Tengah"
            ]
        );
        Wilayah::create(
            [
                'id' => '34',
                'nama_daerah' => "Di Yogyakarta"
            ]
        );
        Wilayah::create(
            [
                'id' => '35',
                'nama_daerah' => "Jawa Timur"
            ]
        );
        Wilayah::create(
            [
                'id' => '36',
                'nama_daerah' => "Banten"
            ]
        );
        Wilayah::create(
            [
                'id' => '51',
                'nama_daerah' => "Bali"
            ]
        );
        Wilayah::create(
            [
                'id' => '52',
                'nama_daerah' => "Nusa Tenggara Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '53',
                'nama_daerah' => "Nusa Tenggara Timur"
            ]
        );
        Wilayah::create(
            [
                'id' => '61',
                'nama_daerah' => "Kalimantan Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '62',
                'nama_daerah' => "Kalimantan Tengah"
            ]
        );
        Wilayah::create(
            [
                'id' => '63',
                'nama_daerah' => "Kalimantan Selatan"
            ]
        );
        Wilayah::create(
            [
                'id' => '64',
                'nama_daerah' => "Kalimantan Timur"
            ]
        );
        Wilayah::create(
            [
                'id' => '65',
                'nama_daerah' => "Kalimantan Utara"
            ]
        );
        Wilayah::create(
            [
                'id' => '71',
                'nama_daerah' => "Sulawesi Utara"
            ]
        );
        Wilayah::create(
            [
                'id' => '72',
                'nama_daerah' => "Sulawesi Tengah"
            ]
        );
        Wilayah::create(
            [
                'id' => '73',
                'nama_daerah' => "Sulawesi Selatan"
            ]
        );
        Wilayah::create(
            [
                'id' => '74',
                'nama_daerah' => "Sulawesi Tenggara"
            ]
        );
        Wilayah::create(
            [
                'id' => '75',
                'nama_daerah' => "Gorontalo"
            ]
        );
        Wilayah::create(
            [
                'id' => '76',
                'nama_daerah' => "Sulawesi Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '81',
                'nama_daerah' => "Maluku"
            ]
        );
        Wilayah::create(
            [
                'id' => '82',
                'nama_daerah' => "Maluku Utara"
            ]
        );
        Wilayah::create(
            [
                'id' => '91',
                'nama_daerah' => "Papua Barat"
            ]
        );
        Wilayah::create(
            [
                'id' => '94',
                'nama_daerah' => "Papua"
            ]
        );
    }
}
