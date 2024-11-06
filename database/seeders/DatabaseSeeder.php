<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Room;
use App\Models\TestEntry;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Project::factory(3)->has(
        //     Room::factory()->count(3)
        //         ->hasTestEntries()
        // )->create();

        Project::factory(2)->has(
            Room::factory(4)
                ->has(TestEntry::factory(2))
        )->create();
    }
}
