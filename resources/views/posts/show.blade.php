@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$post->title}}</h1>
<div>
    {{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
@endsection