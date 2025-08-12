<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_bn' => fake('bn_BD')->name,
            'name_en' => fake()->name,
            'birth_date' => fake()->date(),
            'nationality' => 'Bangladeshi',
            'religion' => fake()->randomElement(['Islam', 'Hinduism', 'Christianity', 'Buddhism']),
            'admission_date' => fake()->date(),
            'admission_year' => fake()->year(),
            'image' => fake()->imageUrl(300, 300, 'people'),
        ];
    }
}
