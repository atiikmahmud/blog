@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class='no-page'>
    <img src="{{url('/image/nopage.webp')}}" alt="no_page_image" style="height: 500px" class="d-block mx-auto" />
    <div class="back-button text-center">
        <a href="/" class="btn btn-primary">Go back</a>
    </div>
</div>

@endsection