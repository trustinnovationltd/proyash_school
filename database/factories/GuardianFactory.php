<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardia>
 */
class GuardianFactory extends Factory
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
            'father_name_bn' => 'মোঃ আবুল কালাম',
            'father_name_en' => fake()->name('male'),
            'father_occupation' => 'Businessman',
            'father_mobile' => '01712345678',
            'mother_name_bn' => 'মোছাঃ রুবিনা',
            'mother_name_en' => fake()->name('female'),
            'mother_occupation' => 'Housewife',
            'mother_mobile' => '01787654321',
        ];
    }
}
