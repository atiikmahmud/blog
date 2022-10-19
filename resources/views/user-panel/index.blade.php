@extends('layouts2.layouts')
@section('title', $title)

@section('content')

<!-- Slider Section Start -->
@include('layouts2.slider-section')
<!-- Slider Section End -->

<!-- Post Area with Categories Start -->
@include('layouts2.post-area')
<!-- Post Area with Categories End -->


<!-- Category Area Start -->
@include('layouts2.categories-area')
<!-- Category Area End -->

@endsection