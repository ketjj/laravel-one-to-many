@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div>
    <h4>{{ $post->title }}</h4>
    <p>{{  $post->content}}</p>
    <div class="mb-2">Categoria:{{$post->category ? $post->category->name : 'Non presente'}}</div>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <h5 class="mt-3">Dr.{{ $post->author }}</h5>

    <a href="{{ route( 'admin.posts.index') }}" class="btn btn-primary"> >>Torna indietro</a>
  </div>     
@endsection