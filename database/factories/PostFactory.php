<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::query()->inRandomOrder()->first()->id;
        $title = $this->faker->sentence(4);
        $words = explode(' ', $title);
        $slugWords = array_slice($words, 0, rand(2, 4));
        $slug = strtolower(implode('-', $slugWords)); 

        return [
            'title' => $title,
            'slug'=> $slug,
            'body' => $this->faker->paragraph(20),
            'user_id' => $userId,
            'category_id' => Category::query()->inRandomOrder()->first()->id, // Picking a random category
            'created_by' => $userId, // Picking a random user for created_by
            'updated_by' => $userId, // Picking a random user for updated_by
            // 'image' => $this->faker->imageUrl,
            'image' => $this->faker->hexColor,
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'created_at' => now(),
            'updated_at' => now(),
            'trending' => $this->faker->randomElement([true, false]),
        ];
    }

    
  

}
