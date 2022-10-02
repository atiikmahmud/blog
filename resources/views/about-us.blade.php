@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-image">
                    <img src="https://img.freepik.com/free-vector/about-us-concept-illustration_114360-639.jpg?w=2000" alt="contact_image" class='d-block mx-auto mt-5' style="height: 500px"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form" style="margin-top: 80px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>About Us</div>
                        </div>
                        <div class="card-body">
                          <div class="demo-1">
                            <h4>Blog</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                          </div>
                          <div class="demo-2">
                            <h4>Laravel</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection