<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Center;
use App\Models\Knowledge;
use App\Models\Planning;
use App\Models\Registration;
use Illuminate\Database\Seeder;
use Database\Seeders\BehaviourSeeder;
use Database\Seeders\KnowledgeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::factory()->create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        Center::factory()->create(['name' => 'Cepegra']);
        Center::factory()->create(['name' => 'Liège']);
        Job::factory(10)->create();
        $this->call([
            KnowledgeSeeder::class,
            BehaviourSeeder::class
        ]);
        Planning::factory(10)->create();
        Registration::factory(10)->create();
    }
}
