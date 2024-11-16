@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        <div class="posts-list">
            @foreach ($posts as $post)
                <div class="post-item">
                    <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
