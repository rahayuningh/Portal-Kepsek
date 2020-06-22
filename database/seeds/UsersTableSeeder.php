<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        // User::create([
        //     'id' => '1',
        //     'name' => 'muhammad_fakhri',
        //     'email' => 'muhammadfakhri301@gmail.com',
        //     'sso_user_id' => '5ebcd969fe3e233ef0c2f4a1',
        //     'role' => 'guru'
        // ]);

        User::create([
            'id' => '1',
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
