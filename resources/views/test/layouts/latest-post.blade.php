<div class="row">
    <div class="col-12">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Latest Posts</h4>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
    </div>
    
    @foreach($latestPosts as $posts)
    <div class="col-lg-6">
        <div class="position-relative mb-3">
            {{-- <img class="img-fluid w-100" src="{{ asset('assets2/img/news-800x500-1.jpg') }}" style="object-fit: cover;"> --}}

            @if($posts->image)
                <img class="" src="image/{{ $posts->image }}" style="height: 250px; width: 100%">
                @else
                <img class="" src="{{ asset('assets2/img/news-800x500-1.jpg') }}" style="height: 250px; width: 100%;">
            @endif

            <div class="bg-white border border-top-0 p-4">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        href="">{{ $posts->categories->name }}</a>
                    <a class="text-body" href=""><small>{{ $posts->created_at->toFormattedDateString() }}</small></a>
                </div>
                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{ Str::limit($posts->title, 50) }}</a>
                <p class="m-0">{!! html_entity_decode(Str::limit($posts->body, 100)) !!}</p>
            </div>
            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                <div class="d-flex align-items-center">
                    @if($posts->users->profile_photo_path)
                    <img class="rounded-circle mr-2"
                                    src="/storage/profile-photos/{{basename($posts->users->profile_photo_path)}}" width="25px" height="25px" alt="{{ $posts->users->name }}" />
                    @else
                    <img class="img-profile rounded-circle"
                                    src="{{ $posts->users->profile_photo_url }}" alt="{{ $posts->users->name }}" width="25px" height="25px" />
                     @endif
                    <small>{{ $posts->users->name }}</small>
                </div>
                <div class="d-flex align-items-center">
                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                </div>
            </div>
            
        </div>
    </div>
    @endforeach

    @foreach($all_posts as $item)
    <div class="col-md-6">
        
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            
            @if($item->image)
                <img class="img-fluid" src="image/{{ $item->image }}" alt="" height="110px" width="110px">
                @else
                <img class="img-fluid" src="{{ asset('assets2/img/news-800x500-1.jpg') }}" alt="" height="110px" width="110px">
            @endif

            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{ $item->categories->name }}</a>
                    <a class="text-body" href=""><small>{{ $item->created_at->toFormattedDateString() }}</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ Str::limit($item->title, 48) }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>