@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Comment</h1>
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="content">Comment</label>
                <textarea name="content" id="content" class="form-control" rows="4" required>{{ old('content', $comment->content) }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Update Comment</button>
            </div>
        </form>
    </div>
@endsection
