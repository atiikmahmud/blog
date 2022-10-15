@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Posts</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Posts</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td align="center">
                                @if($user->profile_photo_path)
                                    <img class="img-profile rounded-circle"
                                    src="/storage/profile-photos/{{basename($user->profile_photo_path)}}" width="40px" height="40px" />
                                @else
                                    <img class="img-profile rounded-circle"
                                    src="{{ $user->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="40px" height="40px" />
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>                            
                            <td>{{ $user->email }}</td>                            
                            <td align="center">{{App\Models\Post::where('user_id', $user->id)->count()}}</td>                           
                            <td align="center">{{ $user->created_at->toFormattedDateString() }}</td>                            
                            <td>
                                <a href="{{ route('admin.user.posts', $user->id) }}" class="btn btn-sm btn-primary">Post List</a>

                                @if($user->status == 0)
                                    <a href="{{ route('admin.user.approval', $user->id) }}" class="btn btn-sm btn-warning">Disable</a>
                                @else
                                    <a href="{{ route('admin.user.approval', $user->id) }}" class="btn btn-sm btn-success" style="padding: 4px 12px;">Active</a>
                                @endif
                                
                                <a href="{{ route('admin.edit.post', $user->id) }}" class="btn btn-sm btn-info" onclick="return confirm('Are you sure, edit this post?')">Edit</a>

                                <form action="{{ route('admin.delete.post', $user->id) }}" method="POST" class="d-inline">
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