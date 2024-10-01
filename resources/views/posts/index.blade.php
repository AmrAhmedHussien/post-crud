@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

    @if ($message = Session::get('success'))
        <div class="alert-success">
            {{ $message }}
        </div>
    @endif

    <!-- Add Post Button -->
    <div class="post-actions">
        <a href="{{ route('posts.create') }}" class="btn create-btn">Create New Post</a>
    </div>

    <!-- Display posts as cards -->
    <div class="posts-container">
        @foreach ($posts as $post)
            <div class="post-card">
                <h2>{{ $post->title }}</h2>
                <p class="content">{{ Str::limit($post->content, 150, '...') }}</p>
                <p class="author">By: {{ $post->author }}</p>
                <p class="from-time">{{ $post->created_at->diffForHumans() }}</p>
                <!-- Action buttons -->
                <div class="post-buttons">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn view-btn">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn edit-btn">Edit</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete-btn">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="pagination">
        {!! $posts->links() !!}
    </div>
    
@endsection
