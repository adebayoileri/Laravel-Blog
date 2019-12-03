@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Fell free to contribute and use this project</p>
    <a class="btn btn-primary btn-lg" href="/signup" role="button" >Signup</a>
    <a class="btn btn-success btn-lg" href="/login" role="button">Login</a>
</div>
@endsection 