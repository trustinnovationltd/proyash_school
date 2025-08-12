<?php

namespace Database\Factories;

use App\Models\BasicSettings\Institute;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institute>
 */
class InstituteFactory extends Factory
{
    protected $model = Institute::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unique_id' => fake()->unique()->regexify('[A-Z]{3}[0-9]{5}'),
            'name' => fake()->company(),
            'branch_name' => fake()->optional()->companySuffix(),
            'address' => fake()->address(),
            'eiin_code' => fake()->unique()->numerify('######'),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'website' => fake()->url(),
            'medium_ids' => json_encode([1, 2, 3]),
            'department_ids' => json_encode([1, 2, 3, 4]),
            'shift_ids' => json_encode([1, 2]),
            'class_ids' => json_encode([1, 2, 3, 4, 5]),
            'exam_type_ids' => json_encode([1, 2, 3]),
            'weekly_holidays' => json_encode(['Friday', 'Saturday']),
            'description' => fake()->paragraph(),
            'logo' => 'defaults/logo.png',
            'dashboard_banner_image' => 'defaults/banner.jpg',
            'facebook_link' => fake()->url(),
            'youtube_link' => 'https://youtube.com/channel/' . fake()->regexify('[A-Za-z0-9]{24}'),
            'map_link' => fake()->url(),
            'android_link' => fake()->url(),
            'status' => fake()->boolean(80), // 80% chance of being true
            'created_by' => User::factory(),
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }
}
