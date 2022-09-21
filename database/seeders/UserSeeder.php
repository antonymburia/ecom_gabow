<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gabowcomputers.com',
                'role' => 'admin',
                'password' => Hash::make('Gabow0001'),
            ],
            [
                'name' => 'test',
                'email' => 'test@user.com',
                'role' => 'user',
                'password' => Hash::make('test0001'),
            ]

        ]);
    }
}
