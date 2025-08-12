<?php

namespace Database\Seeders;

use App\Models\BasicSettings\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::factory()->count(100)->create();
    }
}
