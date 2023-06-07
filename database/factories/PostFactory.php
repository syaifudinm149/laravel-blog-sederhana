<?php

namespace Database\Factories;

use App\Models\Post;
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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(4,8)),
            'category_id' => mt_rand(1, 6),
            'user_id' => mt_rand(1, 28),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
             'body' => collect($this->faker->paragraphs(mt_rand(10,15)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            // 'user_id' => 1,
        ];
    }
}
