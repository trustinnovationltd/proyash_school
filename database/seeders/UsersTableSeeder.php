<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Agatha Williams',
                'email' => 'admin@til.net',
                'password' => '$2y$12$59fpBtmc.sY2mi6C7h2bAujTLJNmCFsrttubG2Qi8eTt/ftyuruBi', // Password : 12345678
            ],
            [
                'id' => 2,
                'name' => 'Blaine Keller',
                'email' => 'user@til.net',
                'password' => '$2y$12$59fpBtmc.sY2mi6C7h2bAujTLJNmCFsrttubG2Qi8eTt/ftyuruBi', // Password : 12345678
            ]
        ]);
    }
}
