@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-image">
                    <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?w=2000" alt="login_image" class='d-block mx-auto mt-3' style="height: 600px" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form px-4" style="margin-top: 150px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>Login</div>
                        </div>
                        <div class="card-body">                                                    
                            <form action="">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class='form-control mt-1' id="email" autoComplete='off' required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class='form-control mt-1' id="pwd" autoComplete='off' required />
                                </div>
                                <div class="form-group mb-2">
                                    <small>If you are not register, <a href="/register">click here</a>.</small>
                                </div>
                                <div class="form-group">
                                    <button type="button" class='btn btn-primary'>Login</button>
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