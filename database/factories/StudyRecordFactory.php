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
            'title' => fake(),
            'categoly_id' => fake(),
            'user_id' => fake()->numberBetween(1,10),
            'content' => fake(), 
            'duration' => fake(),
            'status' => fake(),
            'tag_id' => fake(),
            'start_time' => fake(),
            'end_time' => fake(),
        ];
    }
}
