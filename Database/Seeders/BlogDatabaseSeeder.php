<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $post = new Post;
        $post->title = "Home";
        $post->body = "Home Page";
        $post->save();

        $post = new Post;
        $post->title = "About";
        $post->body = "About Page";
        $post->save();
    }
}
