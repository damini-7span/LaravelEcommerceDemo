<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [];
        $admin = [
            [
                'name' => 'admin',
                'email' => 'admin@yopmail.com',
                'password' => Hash::make('password'),
                'mobile' => '9999999999',
            ]
        ];

        DB::table('users')->insert($admin);
    }
}
