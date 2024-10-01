@extends('layout')

@section('title', 'Create Post')

@section('content')
    <h1 class="page-title">Create New Post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-input">
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}" class="form-input">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-input">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Create Post</button>
        </div>
    </form>
@endsection
