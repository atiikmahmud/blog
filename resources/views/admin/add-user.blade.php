@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
    </div>

    <!-- Add User Page -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="add-post-area">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                {{ $error }}
                                <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                              
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif 

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card mb-5">
                        <div class="card-header h5 d-flex justify-content-between">
                            <div class="post-title">
                                Add New User
                            </div>
                        </div>

                    <div class="card-body">
                        <div class="post-form-area">        
                            <form action="{{ route('admin.add.new.user') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
            
                                <label>Name</label>
                                <input type="text" class='form-control' name="name" required />                        
                                </div>

                                <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" class='form-control' name="email" required />                        
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Role</label>
                                <select class="form-control" aria-label="role" name="role"  required >
                                    <option selected>Select role</option>                                    
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>                       
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class='form-control' name="password" required />                        
                                </div>

                                <div class="form-group mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class='form-control' name="c_password" required />                        
                                </div>
            
                                <div class="form-group d-flex justify-content-end">
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