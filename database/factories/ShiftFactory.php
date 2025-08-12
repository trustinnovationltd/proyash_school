<?php

namespace Database\Factories;

use App\Models\BasicSettings\Shift;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shift>
 */
class ShiftFactory extends Factory
{
    protected $model = Shift::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'status' => fake()->boolean(),
            'created_by' => User::factory(),
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }
}
