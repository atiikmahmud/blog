@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    </div>

    <!-- Add Post Page -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
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
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card mb-5">
                        <div class="card-header h5 d-flex justify-content-between">
                            <div class="post-title">
                                Add New Category
                            </div>
                        </div>

                    <div class="card-body">
                        <div class="add-category-form-area">        
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group mb-3">            
                                    <label>Category Name</label>
                                    <input type="text" class='form-control mt-1' id="title" name="name" required />                        
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>Category Details</label>
                                    <input type="text" class='form-control mt-1' id="tag" name="details" required/>               
                                </div>
            
                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>               
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