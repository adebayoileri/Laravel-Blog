@extends('layouts.app')

@section('content')
@if($error)
    <div>
        {{ $error }}
    </div>
@endif
    <h1 class="center">Welcome to register page</h1>
    <form method="POST">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lname" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
         <div class="form-group">
             <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit"name="submit" role="button" class="btn btn-primary form-control">
        </div>
    </form>
@endsection