<?php

class PostsTableSeeder extends Seeder{

    public function run(){
                
        $post = new Post();
        $post->title = 'hello world!';
        $post->body = 'Building Site..';
        $post->user_id = User::first()->id;
        $post->save();

        $post1 = new Post();
        $post1->title = 'this';
        $post1->body = 'that';
        $post1->user_id = User::first()->id;
        $post->save();

    }
}
