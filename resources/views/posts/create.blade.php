@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Post</h1>
        {!! Form::open(['action'=>'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title',  'Title')}}
            {{Form::text('title','', ['class' =>'form-control', 'placeholder' => "Title"])}}
        </div>
        <div class="form-group">
            {{Form::label('body',  'Body')}}
            {{Form::textarea('body','', ['class' =>'form-control', 'placeholder' => "Post Body"])}}
        </div>
    {!! Form::close() !!}
    </div>
@endsection