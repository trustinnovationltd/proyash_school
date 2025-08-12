<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'present_village' => 'Dhanmondi',
            'present_post_office' => 'Dhanmondi PO',
            'present_upazila' => 'Dhanmondi',
            'present_district' => 'Dhaka',
            'permanent_village' => 'Narayanganj',
            'permanent_post_office' => 'Narayanganj PO',
            'permanent_upazila' => 'Sadar',
            'permanent_district' => 'Narayanganj',
        ];
    }
}
