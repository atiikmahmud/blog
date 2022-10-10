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
                        <div class="post-body pt-3">
                            {{ $post->body }}
                        </div>
                        <div class="post-tags mt-3">
                            <small><strong>Tags: </strong>{{ $post->tag }}</small>
                        </div>
                        <hr />
                        <div class="comments-section">
                            <div class='h5'>
                                Comments
                            </div>
                            <div class="row">
                                
                                <Comment id={params.id} comments={comments} /> 
                                
                                <div class="col-md-6">                                 
                                    
                                    @if(auth()->user())
                                    <div class="comment-box pt-3" style="marginleft: 50px">
                                        <form>
                                            @csrf
                                            <textarea value={comment} id="comment" cols="30" rows="3" class='form-control'></textarea>
                                            <button type="submit" class='btn btn-sm btn-primary mt-2'>Comment</button>
                                        </form>
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