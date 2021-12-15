<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Pictures;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        Post::factory(1500)->create();
        Category::factory(10)->create();
        Tags::factory(50)->create();
        Pictures::factory(2500)->create();
        Video::factory(500)->create();
        Comment::factory(2500)->create();
    }
}
