<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Tag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTag>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // sumber https://stackoverflow.com/questions/43202886/laravel-seeding-multiple-unique-columns-with-faker
        $post_count = Post::all()->count();
        $tag_count = Tag::all()->count();

        $post_tag = [];
        for ($i = 1; $i <= $post_count; $i++) {
            for ($j = 1; $j <= $tag_count; $j++) {
                array_push($post_tag, $i . "-" . $j);
            }
        }

        $post_and_tag = $this->faker->unique->randomElement($post_tag);

        $post_and_tag = explode('-', $post_and_tag);
        $post_id = $post_and_tag[0];
        $tag_id = $post_and_tag[1];
        return [
            'post_id' => $post_id,
            'tag_id' => $tag_id
        ];
    }
}
