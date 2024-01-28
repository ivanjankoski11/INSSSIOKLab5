
@extends('layouts.app')

@section('content')
<h1>Edit Blog</h1>

<form action="{{ route('blogs.update', $blog) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $blog->title }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" cols="30" rows="10" required>{{ $blog->content }}</textarea>
    <br>
    <button type="submit">Update Blog</button>
</form>
@endsection