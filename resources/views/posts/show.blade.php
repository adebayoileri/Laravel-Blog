@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$post->title}}</h1>
<div>
    <h4>{{$post->body}}</h4>
</div>
<small>Written on {{$post->created_at}}</small>
<hr>
<a class="btn btn-primary mb-3" href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
{!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
@endsection