@extends('admin.layouts.admin-layout')
@section('title', $title)

@section('content')

<div class="dashboard">
    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 80px">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body mb-5">
                        <div class="welcome-msg">
                            <img src="{{url('/image/welcome.webp')}}" class="d-block mx-auto" alt="" style="height: 300px" />
                            <div class="welcome-msg-title h2 text-center">
                                Admin Dashboard
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection