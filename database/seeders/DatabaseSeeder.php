<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([ 'name' => 'Xin' ]);
        Post::factory(5)->create([ 'user_id' => $user->id ]);
    
        // $user = User::factory()->create();
        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title' => 'My Family post',
        //     'slug' => 'my-first',
        //     'except'=>'<p>lorem...</p>',
        //     'body' => '<p>my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, </p>'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title' => 'My Work post',
        //     'slug' => 'my-work',
        //     'except'=>'<p>lorem...</p>',
        //     'body' => '<p>my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, my-first, </p>'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
