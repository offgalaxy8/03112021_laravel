@extends('layouts.main')
@section('content')
  <div>
      <form action="{{ route('post.store') }}" method="post">
          @csrf
          <div class="mb-3">
              <label for="title" class="form-label">Post title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
          </div>
          <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea type="text" class="form-control" name="content" id="content" placeholder="Content"></textarea>
          </div>
          <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="text" class="form-control" name="image" id="image" placeholder="Image">
          </div>
          <div class="mb-3">
              <label for="likes" class="form-label">Likes</label>
              <input type="number" class="form-control" name="likes" id="likes" placeholder="Likes">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
@endsection
