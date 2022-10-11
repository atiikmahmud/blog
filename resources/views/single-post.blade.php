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
                            <small><strong>Category: </strong>{{ $post->categories->name }},<strong>Tag: </strong>{{ $post->tag }}</small>
                        </div>
                        <div class="post-date-time">
                            <small><strong>Date: </strong>{{ $post->created_at->toDayDateTimeString() }}</small>
                        </div>
                        <hr />
                        <div class="comments-section">
                            <div class='h5'>
                                Comments
                            </div>
                            <div class="row">
                                <div class="previous-comments">
                                    <div class="col-md-6 d-flex justify-content-between">
                                        <div class="user-image">
                                            <img src="https://templates.joomla-monster.com/joomla30/jm-news-portal/components/com_djclassifieds/assets/images/default_profile.png" alt="" class="border rounded-circle d-inline" style="height: 40px; width: 40px;" />
                                        </div>
                                        <div class="comment-text p-2 rounded" style="background-color: #f3f3f3; margin-left: 10px;">
                                            <p class="d-inline">
                                                <strong>Atik Mahmud</strong><br>
                                                Foreign minister AK Abdul Momen on Monday said if India cannot keep its border security forces under control.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">                                  
                                    @if(auth()->user())
                                    <div class="comment-box pt-3" style="marginleft: 50px">
                                        <form>
                                            @csrf
                                            <textarea name="comment" cols="30" rows="3" class='form-control'></textarea>
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