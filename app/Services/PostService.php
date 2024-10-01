<?php

namespace App\Services;

use App\Models\Post;

class PostService{
    public function index($request)
    {
        $posts = Post::latest()->paginate(5);
        return $posts;
    }
    public function store($data)
    {
        Post::create($data);
    }
    public function update($data, $post)
    {
        $post->update($data);
    }
    public function destroy($post)
    {
        $post->delete();
    }
}