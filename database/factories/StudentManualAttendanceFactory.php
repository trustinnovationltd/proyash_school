<?php

namespace Database\Factories;

use App\Models\StudentManualAttendance;
use App\Models\BasicSettings\Institute;
use App\Models\BasicSettings\AcademicYear;
use App\Models\BasicSettings\Medium;
use App\Models\BasicSettings\Shift;
use App\Models\BasicSettings\Classes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentManualAttendanceFactory extends Factory
{
    protected $model = StudentManualAttendance::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institute_id' => Institute::inRandomOrder()->first()->id ?? Institute::factory(),
            'academic_year_id' => AcademicYear::inRandomOrder()->first()->id ?? AcademicYear::factory(),
            'medium_id' =>  Medium::inRandomOrder()->first()->id ?? Medium::factory(),
            'shift_id' => Shift::inRandomOrder()->first()->id ?? Shift::factory(),
            'class_id' => Classes::inRandomOrder()->first()->id ?? Classes::factory(),
            'department_id' => fake()->numberBetween(1, 5),
            'section_id' => fake()->numberBetween(1, 5),
            'school_id' => fake()->numberBetween(1, 10),
            'student_name' => fake()->name(),
            'student_roll' => fake()->unique()->numberBetween(1, 999),
            'in_time' => fake()->time('H:i:s'),
            'out_time' => fake()->optional(0.9)->time('H:i:s'),
            'status' => fake()->randomElement(['present', 'absent', 'late', 'left_early']),
            'created_by' => User::factory(),
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }

    /**
     * Indicate that the student is present.
     */
    public function present()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'present',
                'in_time' => fake()->time('H:i:s'),
                'out_time' => fake()->time('H:i:s'),
            ];
        });
    }

    /**
     * Indicate that the student is absent.
     */
    public function absent()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'absent',
                'in_time' => null,
                'out_time' => null,
            ];
        });
    }

    /**
     * Indicate that the student is late.
     */
    public function late()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'late',
                'in_time' => fake()->time('H:i:s', '10:00:00'),
                'out_time' => fake()->time('H:i:s', '16:00:00'),
            ];
        });
    }
}