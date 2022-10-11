@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="single-posts">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                
                <div class="card mt-5 mb-5">
                    <div class="card-header h5 d-flex justify-content-between">
                        <div class="post-title">
                            {{ $post->title }}
                        </div>
                        <div class="all-post">
                            <a href="{{ route('blog') }}" class="btn btn-sm btn-dark">Posts</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-image-section">
                            <img src="https://us.123rf.com/450wm/creativepriyanka/creativepriyanka1905/creativepriyanka190500599/124082851-demo-icon.jpg?ver=6" alt="" class='d-block mx-auto' style="height: 300px; width: 300px;" />
                        </div>
                        <div class="post-body py-3">
                            {{ $post->body }}
                        </div>

                        <div class="post-info d-flex justify-content-between">
                            <div class="left-side">
                                <div class="post-category">
                                    <small><strong>Category: </strong>{{ $post->categories->name }}</small>
                                </div>
                                <div class="post-tags">
                                    <small><strong>Tag: </strong>{{ $post->tag }}</small>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="post-by">
                                    <small><strong>Post by: </strong>{{ $post->users->name }}</small>
                                </div>                        
                                <div class="post-date-time">
                                    <small><strong>Date: </strong>{{ $post->created_at->toFormattedDateString() }}</small>
                                </div>
                            </div>
                        </div>
                        
                        <hr/>

                        <div class="comments-section">
                            <div class='h5'>
                                Comments
                            </div>
                            <div class="row">
                                @foreach($comments as $item)
                                    <div class="previous-comments mb-3">
                                        <div class="col-md-6">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <div class="user-image mt-2">
                                                            @if($item->users->profile_photo_path)
                                                            <img src="/storage/profile-photos/{{ basename( $item->users->profile_photo_path) }}" alt="" class="border rounded-circle" style="height: 40px; width: 40px; " />
                                                            @else
                                                            <img src="{{ $item->users->profile_photo_url }}" alt="" class="border rounded-circle" style="height: 40px; width: 40px; " />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="comment-text p-2 rounded" style="background-color: #f3f3f3; margin-left: 10px; margin-right: 10px; ">
                                                            <p class="d-inline">
                                                                 <strong>{{ $item->users->name }}</strong><br>
                                                                {{ $item->text }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-6">                                  
                                    @if(auth()->user())
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-11">
                                                <div class="comment-box" style="padding-left: 10px;">
                                                    
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                                                {{ $error }}
                                                                <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <form action="{{ route('comment.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                        <textarea name="comment" cols="30" rows="3" class='form-control' placeholder="comment here.." required></textarea>
                                                        <button type="submit" class='btn btn-sm btn-primary mt-2'>Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else                                
                                    <p class='pt-3'>* If you login here, you can comment in this post.</p>
                                    @endif                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection