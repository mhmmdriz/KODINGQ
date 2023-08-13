<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::factory(30)->create();
        User::factory(6)->create();


        Tag::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Tag::create([
            'name' => 'Economy',
            'slug' => 'Economy'
        ]);
        
        Tag::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        
        Tag::create([
            'name' => 'Python',
            'slug' => 'python'
        ]);


        // PostTag::create([
        //     'post_id' => '1',
        //     'category_id' => '1'
        // ]);
        // PostTag::create([
        //     'post_id' => '1',
        //     'category_id' => '2'
        // ]);
        // PostTag::create([
        //     'post_id' => '2',
        //     'category_id' => '3'
        // ]);
        // PostTag::create([
        //     'post_id' => '2',
        //     'category_id' => '1'
        // ]);
        // PostTag::create([
        //     'post_id' => '3',
        //     'category_id' => '1'
        // ]);
        
        PostTag::factory(70)->create();

    }
}
