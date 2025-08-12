<?php

namespace Database\Factories;

use App\Models\BasicSettings\Medium;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medium>
 */
class MediumFactory extends Factory
{
    protected $model = Medium::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(2, true),
            'description' => fake()->paragraph(),
            'status' => fake()->boolean(80), // 80% chance of being true
            'created_by' => User::factory(),
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }
}
