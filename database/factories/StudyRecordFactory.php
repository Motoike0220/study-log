<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyRecord>
 */
class StudyRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text('20'),
            'category_id' => fake()->numberBetween(1,10),
            'user_id' => fake()->numberBetween(1,10),
            'content' => fake()->text('100'),
            'duration' => fake()->time(),
            'status' => fake()->numberBetween(1,10),
            'tag_id' => fake()->numberBetween(1,10),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
        ];
    }
}
