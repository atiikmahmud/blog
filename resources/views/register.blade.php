@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-image">
                    <img src="{{url('/image/register.jpg')}}" alt="login_image" class='d-block mx-auto mt-5' style="height: 500px"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form px-4" style="margin-top: 80px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>Register</div>
                        </div>
                        <div class="card-body">
                            
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                        {{ $error }}
                                        <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" id="name" class='form-control mt-1' name="name" :value="old('name')" required autofocus autocomplete="name"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" id="email" class='form-control mt-1' name="email" :value="old('email')" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" id="password" class='form-control mt-1'  name="password" required autocomplete="new-password" />
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" id="password_confirmation" class='form-control mt-1'  name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                <div class="form-group mb-2">
                                    <small>If you already registered, <a href="{{ route('login') }}">Login here.</a></small>
                                </div>
                                <div class="form-group">
                                    <button type='submit' class='btn btn-primary'>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection