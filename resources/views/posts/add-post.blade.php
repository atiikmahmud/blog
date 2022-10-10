@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="add-post">
    <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <div class="add-post-area">
              <div class="card mt-5">
                <div class="card-header h4">
                  Create Post
                </div>
                <div class="card-body">
                  <div class="post-form-area">
                    <form action="post" method="POST">
                        @csrf
                      <div class="form-group mb-3">
                        <label>Post title</label>
                        <input type="text" class='form-control mt-1' name="title" />                        
                      </div>
                      <div class="form-group mb-3">
                        <label>Post body</label>
                        <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>                     
                      </div>
                      <div class="form-group mb-3">
                        <label>Post tag</label>
                        <input type="text" class='form-control mt-1' name="tag"/>                   
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
</div>

@endsection