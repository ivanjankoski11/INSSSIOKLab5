<!-- resources/views/blogs/index.blade.php -->

@extends('layouts.app')

@section('title', 'All Blogs')

@section('content')
<h1>All Blogs</h1>

@foreach($blogs as $blog)
<div style="width: 300px; height:200px;border:2px solid black;">
    <h3>{{ $blog->title }}</h3>
    <p>{{ $blog->content }}</p>
</div>
<hr>
@endforeach
@endsection