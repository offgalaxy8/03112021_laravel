@extends('layouts.main')
@section('content')
    <div class="create-post">
        <a class="btn btn-success mb-3" href="{{ route('post.create') }}">Create post</a>
    </div>
    <div>
        @foreach($posts as $post)
            <h2><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></h2>
        @endforeach
    </div>
@endsection
