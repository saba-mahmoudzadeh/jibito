<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Entry;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private static string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin'

        ]);
        User::factory()->create([
            'name' => 'Saba',
            'email' => 'sa1371ba@gmail.com',
            'role' => 'customer'
        ]);

        // User::factory(10)->create();
       Category::factory()->create([
            'title' => 'transportation',
            'icon' => 'airplane',
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

        $categories = Category::all();
        $users = User::all();

        for($i=0;$i<10;$i++)
            {
                Entry::factory()->create([
                    'category_id'=>$categories->random()->id,
                    'user_id'=>$users->random()->id,
                ]);
            }
//نکته:دو روش برای اجرای فکتوری مربوط به اینتری ها
//        for($i=0;$i<10;$i++)
//        {
//            Entry::factory()->create([
//                'category_id'=>rand(1,Category::count()),
//                'user_id'=>$users->random()->id,
//            ]);
//        }
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
