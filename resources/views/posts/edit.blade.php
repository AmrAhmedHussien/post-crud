@extends('layout')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="form-container">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-input">
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ $post->author }}" class="form-input">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-input">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Update Post</button>
        </div>
    </form>
@endsection
