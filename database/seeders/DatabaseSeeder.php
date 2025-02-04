<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
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

        User::factory()->create([
            'name' => 'Aniket',
            'email' => 'aniket@example.com',
            'password'=> bcrypt('12345678'),
        ]);

        User::factory(20)->create();

        Category::factory(30)->create();

        Post::factory(30)->create();

        
    }

    
}
