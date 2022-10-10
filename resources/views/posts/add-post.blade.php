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
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('store.post') }}" method="POST">
                        @csrf
                      <div class="form-group mb-3">
                        <label>Post title</label>
                        <input type="text" class='form-control mt-1' id="title" name="title" required />                        
                      </div>
                      <div class="form-group mb-3">
                        <label>Post body</label>
                        <textarea id="body" name="body" cols="30" rows="5" class="form-control" required></textarea>                     
                      </div>
                      <div class="form-group mb-3">
                        <label>Post tag</label>
                        <input type="text" class='form-control mt-1' id="tag" name="tag" required/>               
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