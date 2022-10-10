@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="blog">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3 my-3">
              <div class="card" style="height: 100%">
                <img
                  src="https://us.123rf.com/450wm/creativepriyanka/creativepriyanka1905/creativepriyanka190500599/124082851-demo-icon.jpg?ver=6"
                  class="card-img-top"
                  alt="demo_image"
                  style="height: 300px; width: 300px;"
                />
                <div class="card-body" style="height: 90%">
                  <h5 class="card-title d-inline">{{ $post->title }}</h5>
                  <p class="d-inline"> by <span class="text-primary">{{ $post->users->name }}</span> </p>
                  <p class="card-text">
                    {{Str::limit($post->body, 100)}} 
                    <a href="{{ route('single.post', $post->id) }}" class="text-decoration-none">more...</a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>

@endsection