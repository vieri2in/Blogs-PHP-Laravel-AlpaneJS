<?php

namespace Database\Seeders;

use App\Models\Post;
use \App\Models\User;
use \App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
        $user = User::factory()->create([
            'name' => 'Breanna L'
        ]);
        Post::factory(13)->create([
            'user_id' => $user->id
        ]);
//        $user = User::factory()->create();
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        $hobbies = Category::create([
//            'name' => 'Hobbies',
//            'slug' => 'hobbies'
//        ]);
//        Post::create([
//            'title' => 'First post',
//            'slug' => 'my-first-post',
//            'excerpt' => 'First post lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'category_id' => $work->id,
//            'user_id' => $user->id,
//            'body' => '<p>lorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit amet,
//            consectetur adipisicing elitlorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit
//             amet, consectetur adipisicing elit.</p>'
//        ]);
//        Post::create([
//            'title' => 'Second post',
//            'slug' => 'my-second-post',
//            'excerpt' => 'Second post lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'category_id' => $hobbies->id,
//            'user_id' => $user->id,
//            'body' => '<p>lorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit amet,
//            consectetur adipisicing elitlorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit
//             amet, consectetur adipisicing elit.</p>'
//        ]);
//        Post::create([
//            'title' => 'Third post',
//            'slug' => 'my-third-post',
//            'excerpt' => 'Third post lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'category_id' => $hobbies->id,
//            'user_id' => $user->id,
//            'body' => '<p>lorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit amet,
//            consectetur adipisicing elitlorem ipsum dolor sit amet, consectetur adipisicing elitlorem ipsum dolor sit
//             amet, consectetur adipisicing elit.</p>'
//        ]);
    }
}
