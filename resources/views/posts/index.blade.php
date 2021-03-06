@extends('layouts.app')

@section('content')
<h1 class="my-4">Posts
    <small>Blog Posts In Laravel Blog Project</small>
  </h1>
<div class="row">
<div class="col-md-8">
    <!-- Blog Post -->
    @if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="card mb-4">
        <img class="card-img-top" width="100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover_image">
          <div class="card-body">
          <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->body}}</p>
          <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            {{$post->created_at}}
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
    @endforeach
@else
    <p>No posts found</p>
    @endif
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->
@endsection