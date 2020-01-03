@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Click the register or login button to use this application</p>
    <a class="btn btn-primary " href="/register" role="button" >Register</a>
    <a class="btn btn-success " href="/login" role="button">Login</a>
</div>
@endsection 