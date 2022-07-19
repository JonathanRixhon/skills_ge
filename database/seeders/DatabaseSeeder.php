<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Center;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        Center::factory()->create(['name' => 'Cepegra']);
        Center::factory()->create(['name' => 'Liège']);
        Job::factory()->create();
    }
}
