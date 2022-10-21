@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Posts</h1>
    </div>

    <!-- Single Post -->
    <div class="single-posts">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    
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

                    <div class="card mb-5">
                        <div class="card-header h5 d-flex justify-content-between">
                            <div class="post-title">
                                {{ Str::limit($post->title, 80) }}
                            </div>
                            <div class="all-post">
                                @if($post->status == 0)
                                    <a href="{{ route('admin.post.approval', $post->id) }}" class="btn btn-sm btn-warning">Pending</a>
                                @else
                                    <a href="{{ route('admin.post.approval', $post->id) }}" class="btn btn-sm btn-success">Approved</a>
                                @endif
                                <a href="{{ route('admin.edit.post', $post->id) }}" class="btn btn-sm btn-info" onclick="return confirm('Are you sure, edit this post?')">Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-image-section">
                                @if($post->image)
                                <img src="{{ asset('image/'.$post->image) }}" alt="" class='d-block mx-auto' style="height: 300px;" />
                                @else                            
                                <img src="https://us.123rf.com/450wm/creativepriyanka/creativepriyanka1905/creativepriyanka190500599/124082851-demo-icon.jpg?ver=6" alt="" class='d-block mx-auto' style="height: 300px; width: 300px;" />
                                @endif
                            </div>
                            <div class="post-body py-3">
                                <h5>{{ $post->title }}</h5>
                                {!! html_entity_decode($post->body) !!}
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
                                                            <div class="comments-reply">
    
                                                                <span><i class="fas fa-reply"></i> Reply</span>
                                                                
                                                                <div class="comment-reply-form"  style="padding-left: 50px; padding-right: 10px;">
                                                                    @if(count($item->replies) > 0)
                                                                        @foreach($item->replies as $reply)
                                                                        @include('reply', ['reply' => $reply])
                                                                        @endforeach
                                                                    @endif
    
                                                                    <div style="padding-left: 10px; padding-right: 10px; margin-bottom: 10px">
                                        
                                                                        @if ($errors->any())
                                                                            @foreach ($errors->all() as $error)
                                                                                <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                                                                    {{ $error }}
                                                                                    <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                    
                                                                        <form action="{{ route('reply.store') }}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                                            <input type="hidden" name="comment_id" value="{{ $item->id }}">
                                                                            <textarea name="reply" cols="20" rows="2" class='form-control' placeholder="comment reply.." required></textarea>
                                                                            <button type="submit" class='btn btn-sm btn-primary mt-2'>Reply</button>
                                                                        </form>
                                                                    </div>
                                                                    
                                                                </div>
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

</div>

@endsection