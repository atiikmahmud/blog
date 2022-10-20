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
    </div>
</div>
@if(count($reply->replies) > 0)
    @foreach($reply->replies as $replyitem)
        @include('reply', ['reply' => $replyitem, 'class' => 'margin-left: 40px;']) 
    @endforeach
@endif