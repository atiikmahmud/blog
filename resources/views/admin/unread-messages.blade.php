@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Unread Messages</h1>
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

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width: 40%">Message</th>
                            <th style="width: 12%">Date</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($messages as $item)
                        <tr>
                            <td><a class="text-dark text-decoration-none" href="
                                @if($item->status == 1)
                                {{ route('message.show', $item->id) }}" onclick="return confirm('Are you read this message?')" ><strong>{{ $item->name }}</strong>
                                @else
                                #"
                                onclick="return confirm('Sorry! Message already read.')"> {{ $item->name }}
                                @endif
                                </a></td>
                            <td>{{ $item->email }}</td>
                            <td>{{ Str::limit($item->message, 55) }}</td>
                            <td>{{ $item->created_at->toFormattedDateString() }}</td>
                            <td>
                                <form action="{{ route('message.destroy', $item->id) }}" method="POST" class="d-inline">
                                    <a href="{{ route('message.show', $item->id) }}" class="btn btn-sm btn-dark">View</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure, delete this message?')" class="btn btn-sm btn-danger">Delete</button>
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