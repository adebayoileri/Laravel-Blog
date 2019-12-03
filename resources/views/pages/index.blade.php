@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Fell free to contribute and use this project</p>
    <a class="btn btn-primary " href="/signup" role="button" >Register</a>
    <a class="btn btn-success " href="/login" role="button">Login</a>
</div>
@endsection 