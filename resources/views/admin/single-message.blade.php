@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Message</h1>
    </div>

    <!-- Page Main Body -->
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center text-dark">{{ $showmsg->name }}'s Message</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="basic-info">
                            <div class="name">
                                <strong>Name: </strong>{{ $showmsg->name }}
                            </div>
                            <div class="msg mt-1">
                                <strong>Email: </strong>{{ $showmsg->email }}
                            </div>
                        </div>
                        <div class="message p-2 mt-2 rounded" style="background-color: #ebebed">
                            <p>
                                {{ $showmsg->message }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection