@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Posts</h1>
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
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Post by</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Post by</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ Str::limit($post->title, 40) }}</td>                            
                            <td>{{ $post->categories->name }}</td>                            
                            <td>{{ $post->tag }}</td>
                            <td>{{ $post->users->name }}</td>                            
                            <td>{{ $post->created_at->toFormattedDateString() }}</td>                            
                            <td>
                                @if($post->status == 0)
                                    <a href="{{ route('admin.post.approval', $post->id) }}" class="btn btn-sm btn-warning" style="padding: 4px 14px;">Pending</a>
                                @else
                                    <a href="{{ route('admin.post.approval', $post->id) }}" class="btn btn-sm btn-success">Approved</a>
                                @endif

                                <a href="{{ route('admin.show.post', $post->id) }}" class="btn btn-sm btn-primary">View</a>
                                
                                <a href="{{ route('admin.edit.post', $post->id) }}" class="btn btn-sm btn-info" onclick="return confirm('Are you sure, edit this post?')">Edit</a>

                                <form action="{{ route('admin.delete.post', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure, delete this post?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End DataTales -->

</div>

@endsection