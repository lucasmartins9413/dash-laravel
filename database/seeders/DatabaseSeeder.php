<?php

namespace Database\Seeders;
use App\Models\Task;
use App\Models\User;
use App\Models\Category;
use Database\Seeders\CategorySeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TaskSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class
        ]);

        User::factory(10)->create();
        Category::factory(5)->create();
        Task::factory(30)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
