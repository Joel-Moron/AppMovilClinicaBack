<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $users = [
            [
                'user_alias' => 'Raiin',
                'user_nombre' => 'Isaac Stevens',
                'user_apellidop' => 'Moron',
                'user_apellidom' => 'Ochante',
                'user_dni' => 72815812,
                'user_email' => 'raiinstevens3003@gmail.com',
                'user_emailV' => null,
                'user_password' => Hash::make('123456'),
                'user_token' => null,
                'date_token' => null,
            ]
        ];

        foreach ($users as $user) {
            DB::table('user')->insert($users);
        }
    }
}
