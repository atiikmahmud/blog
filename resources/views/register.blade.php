@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-image">
                    <img src="https://img.freepik.com/premium-vector/online-registration-illustration-design-concept-websites-landing-pages-other_108061-938.jpg?w=2000" alt="login_image" class='d-block mx-auto mt-5' style="height: 500px"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form px-4" style="margin-top: 80px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>Register</div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="name" class='form-control mt-1' id="name" autoComplete='off' required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Image</label>
                                    <input type="file" class='form-control mt-1' id="image" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class='form-control mt-1' id="email" autoComplete='off' required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class='form-control mt-1' id="password" autoComplete='off' required />
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