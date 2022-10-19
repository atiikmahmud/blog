@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="home">
    <div class="welcome-msg mt-5">
        <img src="{{url('/image/welcome.webp')}}" class="d-block mx-auto" alt="" style="height: 300px" />
        <div class="welcome-msg-title h2 text-center">
            <img src="{{url('/image/logo-x-black.png')}}" alt="">
        </div>
        @if(!auth()->user())
        <div class="user-status text-center mt-3">
            If you are not registred on this app, <a href="/register">registred here.</a>
        </div>
        @endif
    </div>
</div>

@endsection