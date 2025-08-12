<?php

namespace Database\Factories;

use App\Models\BasicSettings\AcademicYear;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BasicSettings\AcademicYear>
 */
class AcademicYearFactory extends Factory
{
    protected $model = AcademicYear::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->year() . '-' . (fake()->year() + 1),
            'description' => fake()->paragraph(),
            'status' => fake()->boolean(80), // 80% chance of being true
            'created_by' => User::factory(),
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }
}
