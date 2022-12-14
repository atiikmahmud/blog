@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-image">
                    <img src="{{url('/image/login.jpg')}}" alt="login_image" class='d-block mx-auto mt-3' style="height: 600px" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form px-4" style="margin-top: 150px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>Login</div>
                        </div>
                        <div class="card-body">
                            
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                        {{ $error }}
                                        <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" id="email" class='form-control mt-1' name="email" :value="old('email')" required autofocus/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class='form-control mt-1' id="password" type="password" name="password" required autocomplete="current-password" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class='btn btn-primary'>Login</button>
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