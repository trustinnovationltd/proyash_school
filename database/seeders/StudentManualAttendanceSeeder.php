<?php

namespace Database\Seeders;

use App\Models\StudentManualAttendance;
use Illuminate\Database\Seeder;

class StudentManualAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 attendance records with random statuses
        StudentManualAttendance::factory()
            ->count(50)
            ->create();

        // Create 20 present attendance records
        StudentManualAttendance::factory()
            ->count(20)
            ->present()
            ->create();

        // Create 10 absent attendance records
        StudentManualAttendance::factory()
            ->count(10)
            ->absent()
            ->create();
    }
}