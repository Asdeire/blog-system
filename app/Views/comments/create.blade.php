@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Post a Comment</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="content">Comment</label>
                <textarea name="content" id="content" class="form-control" rows="4" required>{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </div>
        </form>
    </div>
@endsection
