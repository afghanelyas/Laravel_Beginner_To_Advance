<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        $family = Category::create([
            'name' => 'Family',
           'slug' => 'family',
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisic',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisic',

        ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisic',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisic',

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Third Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisic',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisic'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Fourth Post',
            'slug' => 'my-fourth-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisic',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisic'
        ]);


        
    }
}
