@extends('layouts.main')
@section('content')
  <div>
      @foreach($posts as $post)
          <h2>{{ $post->id }}. {{ $post->title }}</h2>
      @endforeach
  </div>
@endsection
