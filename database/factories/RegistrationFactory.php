<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Planning;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, User::max('id')),
            'planning_id' => random_int(1, Planning::max('id')),
        ];
    }
}
