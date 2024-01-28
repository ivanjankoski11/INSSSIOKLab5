
@extends('layouts.app')

@section('content')
<h1>{{ $blog->title }}</h1>
<p>{{ $blog->content }}</p>

<h2>Comments</h2>

@foreach($blog->comments as $comment)
<p>{{ $comment->content }}</p>
@endforeach

<hr>

<!-- Add a comment form -->
<form action="{{ route('comments.store') }}" method="post">
    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <label for="content">Add Comment:</label>
    <textarea name="content" id="content" cols="30" rows="5"></textarea>
    <button type="submit">Add Comment</button>
</form>
@endsection