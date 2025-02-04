<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
            $name = ucfirst($this->faker->unique()->word());
        } while (strlen($name) < 3 || strlen($name) > 12);

        return [
            'name' => $name,
            'slug' => Str::slug($name),// Fake slug
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    

    public function run()
        {
            // Seed 10 fake users
        }
}
