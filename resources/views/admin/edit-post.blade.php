@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Post</h1>
    </div>

    <!-- Edit Page -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="add-post-area">
                    <div class="card mb-5">
                        <div class="card-header h5 d-flex justify-content-between">
                            <div class="post-title">
                                {{ Str::limit($post->title, 80) }}
                            </div>
                        <div class="all-post">
                            <a href="{{ route('admin.posts') }}" class="btn btn-sm btn-dark">Back</a>
                        </div>
                    </div>

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

                    <div class="card-body">
                        <div class="post-form-area">        
                            <form action="{{ route('admin.update.post') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    
                                <input type="hidden" name="id" value="{{ $post->id }}">
            
                                <label>Post title</label>
                                <input type="text" class='form-control mt-1' id="title" name="title" value="{{ $post->title }}" required />                        
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Category</label>
                                <select class="form-control mt-1" aria-label="category" name="category" value="{{ $post->category_id }}" required>
                                    <option value="1" selected>Select category</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" @if($item->id === $post->category_id) selected @endif >{{ $item->name }}</option>
                                    @endforeach
                                </select>                       
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Post body</label>
                                <textarea id="body" name="body" cols="30" rows="7" class="form-control" required>{{ $post->body }}</textarea>                     
                                </div>
            
                                <div class="form-group mb-3">
                                <label>Post tag</label>
                                <input type="text" class='form-control mt-1' id="tag" name="tag" value="{{ $post->tag }}" required/>               
                                </div>
            
                                <div class="form-group d-flex justify-content-end">
                                <button type='submit' class='btn btn-primary'>Update</button>                       
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