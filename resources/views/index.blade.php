@extends('layouts.app')

@section('content')
<h1>All Blogs</h1>

@foreach($blogs as $blog)
<div>
    <!-- <h2><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h2> -->
    <p>{{ $blog->content }}</p>
</div>
<hr>
@endforeach
@endsection