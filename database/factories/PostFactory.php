<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => fake()->sentence(mt_rand(2, 5)),
            'user_id' => fake()->numberBetween(1,6),
            'slug' => fake()->slug(),
            'excerpt' => Str::limit(strip_tags(fake()->sentence(50)), 200, '...'),

            'body' => collect(fake()->paragraphs(mt_rand(3,10)))
                        ->map(fn($p)=>"<p>$p</p>")->implode('')
        ];
    }
}
