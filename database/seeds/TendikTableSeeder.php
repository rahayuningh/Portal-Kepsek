<?php

use App\Tendik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TendikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tendiks')->delete();
        Tendik::create(
            [
                'id' => '1',
                'email' => 'johndoe@example.id',
                'sso_user_id' => '5ec10007fe3e233ef0c2f4b0',
                'level_akses' => 1,
                'jabatan' => 'Staff',
                'bagian_pekerjaan' => 'Kurikulum'
            ]
        );
    }
}
