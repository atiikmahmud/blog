@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Comments</h1>
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
                            <th>Post title</th>
                            <th>User</th>
                            <th>Comments</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($comments)
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ Str::limit($comment->posts->title, 20) }}</td>                            
                            <td>{{ $comment->users->name }}</td>                            
                            <td>{{ Str::limit($comment->text, 30) }}</td>
                            <td>{{ $comment->created_at->toFormattedDateString() }}</td>                            
                            <td>
                                <form action="{{ route('admin.comment.delete', $comment->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('admin.show.post', $comment->posts->id) }}" class="btn btn-sm btn-dark">View</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure, delete this message?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                        @endforeach
                        @else
                        <td colspan="5" class="text-center">There are no data.</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End DataTales -->

</div>

@endsection