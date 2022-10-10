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
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Post title</th>
                      <th>Post tag</th>
                      <th style="width: 20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>01</td>
                        <td>Test Post</td>
                        <td>test</td>
                        <td>
                          <a href="#" class='btn btn-sm btn-primary' style=" marginright: 5px; ">View</a>
                          <a class='btn btn-sm btn-warning' style=" marginright: 5px; ">Edit</a>
                          <a class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>Test Post</td>
                        <td>test</td>
                        <td>
                          <a href="#" class='btn btn-sm btn-primary' style=" marginright: 5px; ">View</a>
                          <a class='btn btn-sm btn-warning' style=" marginright: 5px; ">Edit</a>
                          <a class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
</div>

@endsection