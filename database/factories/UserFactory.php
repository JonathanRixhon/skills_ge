<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public $roles = ['intern', 'secretary', 'teacher', 'admin'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'password' => bcrypt('password'),
            'role' => $this->roles[random_int(0, count($this->roles) - 1)],
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => $this->faker->name(),
                'email' => $this->faker->email(),
                'password' => bcrypt('password'),
                'email_verified_at' => null,
            ];
        });
    }
}
