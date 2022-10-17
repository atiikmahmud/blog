@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Post</h1>
    </div>

    <!-- Add Post Page -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
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
                                Add New Post
                            </div>
                        </div>

                    <div class="card-body">
                        <div class="post-form-area">        
                            <form action="{{ route('admin.new.post') }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group mb-3">
            
                                <label>Post title</label>
                                <input type="text" class='form-control mt-1' id="title" name="title" required />                        
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Category</label>
                                <select class="form-control mt-1" aria-label="category" name="category"  required>
                                    <option value="1" selected>Select category</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>                       
                                </div>

                                <div class="form-group mb-3">
                                    <label>Post Image</label>
                                    <input type="file" class="form-control-file" name="image" required />                     
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Post body</label>
                                <textarea id="body" name="body" cols="30" rows="7" class="form-control" required></textarea>                     
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Post tag</label>
                                <input type="text" class='form-control mt-1' id="tag" name="tag" required/>               
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