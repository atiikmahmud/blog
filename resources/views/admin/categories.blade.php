@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <div><a href="{{ route('post.category.add') }}" class="btn btn-sm btn-dark">Add Category</a></div>
    </div>

    <!-- Begin DataTales -->
    <div class="card shadow mb-4">
        <div class="card-body">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif 
            
            @if(session()->has('fail'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('fail') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif 

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Details</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($categories) && $categories->count())    
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>                            
                                <td>{{ $category->details }}</td>
                                <td>{{ $category->created_at->toFormattedDateString() }}</td>                
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>                            
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">There are no category.</td>
                        </tr>
                        @endif    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End DataTales -->

</div>

@endsection