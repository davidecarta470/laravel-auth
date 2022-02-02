@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h1>Posts</h1>
      <ul style="list-style: none">
        @foreach ($posts as $post)
          
        <li>
          
          <h6>Slug : {{$post->slug}}</h6>
          <div>
            <h2>Titolo : {{$post->title}}</h2>
            <p> Post : {{$post->content}}</p> 
            <hr>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
</div>
@endsection
