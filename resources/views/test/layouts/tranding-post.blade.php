<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        
        @foreach($trandingPosts as $tpost)
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-fluid" src="{{ asset('assets2/img/news-110x110-1.jpg') }}" alt="">
            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{ $tpost->categories->name }}</a>
                    <a class="text-body" href=""><small>{{ $tpost->created_at->toFormattedDateString() }}</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ Str::limit($tpost->title, 50) }}</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>