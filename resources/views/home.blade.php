@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="home">
    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 80px">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body mb-5">
                        <div class="welcome-msg">
                            <img src="https://cdni.iconscout.com/illustration/premium/thumb/welcome-board-3688623-3231454.png" class="d-block mx-auto" alt="" style="height: 300px" />
                            <div class="welcome-msg-title h2 text-center">
                                Laravel Blog
                            </div>
                            <div class="user-status text-center mt-3">
                                If you are not registred on this app, <a href="/register">registred here.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection