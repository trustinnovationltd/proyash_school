<?php

namespace Database\Seeders;

use App\Models\Prefix;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PrefixesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            // StudentSeeder::class,
        ]);
    }
}
