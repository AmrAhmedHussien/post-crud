@extends('layout')

@section('title', 'Post Details')

@section('content')
    <div class="post-details">
        <h1>{{ $post->title }}</h1>
        <p class="author">By: {{ $post->author }}</p>
        <p class="content">{{ $post->content }}</p>
        <p class="from-time">{{ $post->created_at->format('Y-m-d H:i:s') }}</p>

        <!-- Back to Posts Button -->
        <div class="post-actions">
            <a href="{{ route('posts.index') }}" class="btn back-btn">Back to Posts</a>
        </div>
    </div>
@endsection
