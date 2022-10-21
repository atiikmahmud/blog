<div class="row" style="@isset($class) {{$class}} @endisset">
    <div class="col-md-1 mt-2">
        @if($reply->users->profile_photo_path)
        <img src="/storage/profile-photos/{{ basename( $reply->users->profile_photo_path) }}" alt="" class="border rounded-circle" style="height: 40px; width: 40px; "/>
        @else
        <img src="{{ $reply->users->profile_photo_url }}" alt="" class="border rounded-circle" style="height: 40px; width: 40px; "/>
        @endif
    </div>
    <div class="col-md-11">
        <div class="comment-text p-2 rounded mb-2" style="background-color: #f3f3f3; margin-left: 15px; margin-right: 10px; ">
            <p class="d-inline">
                <strong>{{ $reply->users->name }}</strong><br>
                {{ $reply->text }}
            </p>
        </div>
        <div class="comments-reply">

            <span><i class="fas fa-reply"></i> Reply</span>
            <div class="comment-reply-form"  style="padding-left: 50px; padding-right: 10px; margin-bottom: 10px;">
                <div style="padding-left: 10px; padding-right: 10px;">
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
    @if(count($reply->replies) > 0)
        @foreach($reply->replies as $replyitem)
            @include('reply', ['reply' => $replyitem, 'class' => 'margin-left: 40px;']) 
        @endforeach
    @endif
</div>