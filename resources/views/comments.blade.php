@extends('layouts.app')

@section('content')
<h1>Comment Details</h1>
<p>{{ $comment->content }}</p>
<p>Posted on: {{ $comment->created_at }}</p>

<!-- Add your additional comment details here -->

<a href="{{ route('blogs.show', $comment->blog) }}">Back to Blog</a>
@endsection