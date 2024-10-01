<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\PostDTO;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(private readonly PostService $postService)
    {}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = $this->postService->index($request);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post_dto = new PostDTO($request->title,$request->author,$request->content);

        $this->postService->store($post_dto->toArray());

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post_dto = new PostDTO($request->title,$request->author,$request->content);

        $this->postService->update($post_dto->toArray(),$post);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->postService->destroy($post);

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');

    }
}
