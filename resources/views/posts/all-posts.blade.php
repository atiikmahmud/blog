@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="all-posts">
    <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
          <div class="card mt-5">
            <div class="card-header h4 text-center">
              Your posts
            </div>
            <div class="card-body">
              <div class="user-post-table">
                <table class='table table-hover'>
                
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif 

                <thead>
                    <tr>
                      <th>No.</th>
                      <th>Title</th>
                      <th>Tag</th>
                      <th>Created at</th>
                      <th style="width: 20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($posts) && $posts->count())   
                        @foreach ($posts as $key => $item)
                            <tr>
                                <td>{{ $posts->firstItem() + $key }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->tag }}</td>
                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('show.post', $item->id) }}" class='btn btn-sm btn-primary' style=" marginright: 5px; ">View</a>
                                    <form action="{{ route('post.destroy', $item->id) }}" method="POST" class="d-inline">
                                        <a href="{{ route('edit.post', $item->id) }}" onclick="return confirm('Are you sure, edit this post?')" class='btn btn-sm btn-warning' style=" marginright: 5px;">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure, delete this post?')" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>                        
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">There are no data.</td>
                        </tr>
                    @endif
                  </tbody>
                </table>
                {{ $posts->links('pagination::bootstrap-4') }}
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
</div>

@endsection