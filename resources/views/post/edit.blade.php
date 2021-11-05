@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Post title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea type="text" class="form-control" name="content" id="content" placeholder="Content">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="{{ $post->image }}">
            </div>
            <div class="mb-3">
                <label for="likes" class="form-label">Likes</label>
                <input type="number" class="form-control" name="likes" id="likes" placeholder="Likes" value="{{ $post->likes }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
