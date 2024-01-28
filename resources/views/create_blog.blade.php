@extends('layouts.app')

@section('content')
<h1>Create Blog</h1>

<form action="{{ route('blogs.store') }}" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    <br>
    <button type="submit">Create Blog</button>
</form>
@endsection