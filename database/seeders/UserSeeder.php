<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'nip' => '1988071820210042',
                'password' => Hash::make('secret'),
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nip' => '1996050320220047',
                'password' => Hash::make('secret'),
                'level' => 'operator',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nip' => '1996050320220048',
                'password' => Hash::make('secret'),
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
