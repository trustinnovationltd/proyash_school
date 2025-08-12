<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Agreement;
use App\Models\Contact;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()
            ->count(100)
            ->create()
            ->each(function ($student) {
                Guardian::factory()->create(['student_id' => $student->id]);
                Address::factory()->create(['student_id' => $student->id]);
            });
    }
}
