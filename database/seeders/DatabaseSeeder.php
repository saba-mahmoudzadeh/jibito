<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Entry;
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
        Entry::factory(10)->create();
        // User::factory(10)->create();
       Category::factory()->create([
            'title' => 'transportation',
            'icon' => 'airplane',
        ]);

        Category::factory()->create([
            'title' => 'transportation',
            'icon' => 'taxi',
        ]);
        Category::factory()->create([
            'title' => 'health',
            'icon' => 'capsule',
        ]);

        Category::factory()->create([
            'title' => 'bank',
            'icon' => 'bank',
        ]);
        Category::factory()->create([
            'title' => 'gift',
            'icon' => 'gift',
        ]);

        Category::factory()->create([
            'title' => 'telephone',
            'icon' => 'telephone',
        ]);

//
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
