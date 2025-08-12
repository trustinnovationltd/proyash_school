<?php

namespace Database\Factories;

use App\Models\BasicSettings\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(200),
            'status' => $this->faker->boolean(90), // 90% chance of being true
            'created_by' => 1, // Change as per requirement
        ];
    }
}
