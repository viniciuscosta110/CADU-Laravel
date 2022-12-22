<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $courses = ["cc", "ec"];
        
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'period' => fake()->numberBetween(1, 10),
            'course' => $courses[fake()->numberBetween(0, 1)],
            'room' => fake()->randomLetter() . fake()->numberBetween(1, 500),
            'teacher' => fake()->name(),
            'contacts' => fake()->email() . ", " . fake()->phoneNumber(),
            'links' => fake()->url() . ", " . fake()->url(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'created_at' => null,
            'updated_at' => null,
        ]);
    }
}
