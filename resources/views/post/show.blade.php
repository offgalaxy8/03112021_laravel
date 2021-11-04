@extends('layouts.main')
@section('content')
  <div>
      <h2>{{ $post->id }}. {{ $post->title }}</h2>
      <p>{{ $post->id }}. {{ $post->content }}</p>
      <p>{{ $post->id }}. {{ $post->image }}</p>
      <p>{{ $post->id }}. {{ $post->likes }}</p>
  </div>
@endsection
