@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h1>Posts</h1>
      <ul style="list-style: none">
        @foreach ($posts as $post)
          
        <li>
          <h2>Titolo : {{$post->title}}</h2>
          <p>{{$post->content}}</p>
        </li>
        @endforeach
      </ul>
    </div>
</div>
@endsection
