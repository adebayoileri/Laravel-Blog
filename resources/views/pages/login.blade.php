@extends('layouts.app')

@section('content')
    <h1 class="center">Welcome to login page</h1>
    <form>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control">
        </div>
         <div class="form-group">
             <label for="password">Password</label>
            <input type="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" role="button" class="btn btn-primary form-control">
        </div>
    </form>
@endsection