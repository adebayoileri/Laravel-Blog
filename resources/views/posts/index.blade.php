@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="well mb-3">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p>{{$post->body}}</p>
            <br>
            <small>Written on {{$post->created_at}}</small>
        </div>
    @endforeach
@else
    <p>No posts found</p>
    @endif
@endsection