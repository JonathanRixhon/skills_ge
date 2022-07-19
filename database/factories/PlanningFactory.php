<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Center;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planning>
 */
class PlanningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => fake()->word,
            'date' => fake()->date(),
            'job_id' => random_int(1, Job::max('id')),
            'center_id' =>random_int(1, Center::max('id')),
        ];
    }
}
