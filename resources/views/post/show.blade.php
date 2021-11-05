@extends('layouts.main')
@section('content')
    <div>
        <h2>{{ $post->id }}. {{ $post->title }}</h2>
        <p>{{ $post->id }}. {{ $post->content }}</p>
        <p>{{ $post->id }}. {{ $post->image }}</p>
        <p>{{ $post->id }}. {{ $post->likes }}</p>
    </div>

    <div class="bottom-navi">
        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
    </div>

    <div class="bottom-navi">
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger mb-3 mt-3" type="submit">Delete</button>
        </form>
    </div>

    <div class="bottom-navi">
        <a href="{{ route('post.index') }}">Back</a>
    </div>
@endsection
