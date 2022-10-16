<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                
                @foreach($sliders as $slider)
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="{{ asset('assets2/img/news-800x500-1.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">{{ $slider->categories->name }}</a>
                            <a class="text-white" href="">{{ $slider->created_at->toFormattedDateString() }}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">{{ Str::limit($slider->title, 40) }}</a>
                    </div>
                </div>
                @endforeach

                {{-- <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="{{ asset('assets2/img/news-800x500-2.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href="">Jan 01, 2045</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="{{ asset('assets2/img/news-800x500-3.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href="">Jan 01, 2045</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                
                @foreach($latestPosts as $posts)
                <div class="col-md-6 px-0">                    
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('assets2/img/news-700x435-1.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">{{ $posts->categories->name }}</a>
                                <a class="text-white" href=""><small>{{ $posts->created_at->toFormattedDateString() }}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{ Str::limit($posts->title, 40) }}</a>
                        </div>
                    </div>                    
                </div>
                @endforeach

                {{-- <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('assets2/img/news-700x435-2.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('assets2/img/news-700x435-3.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="{{ asset('assets2/img/news-700x435-4.jpg') }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>