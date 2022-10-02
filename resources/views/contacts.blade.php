@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-image">
                    <img src="http://unblast.com/wp-content/uploads/2020/09/Contact-Us-Vector-Illustration-1.jpg" alt="contact_image" class='d-block mx-auto mt-5' style="height: 500px" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form px-4" style="margin-top: 80px">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h3 text-center'>Contact</div>
                        </div>
                        <div class="card-body">
                            <form>                            
                                <div class="form-group mb-3">
                                    <label htmlFor="">Name</label>
                                    <input type="text" class='form-control mt-1' id="name" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label htmlFor="">Email</label>
                                    <input type="email" class='form-control mt-1'id="email" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label htmlFor="">Message</label>
                                    <textarea rows="5" cols="12" class='form-control'></textarea>
                                </div>
                                <div class="form-group">
                                    <button type='submit' class='btn btn-primary'>Send</button>
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