@extends('layouts.layouts')
@section('title', $title)

@section('content')

<div class="container mt-4">
    <div class="slider-section" style="background-color: #f3f3f3; min-height: 400px;">
        <div class="row">
            <div class="col-md-8" style="padding-right: 0%">
                <div class="sliders">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          @foreach($sliders as $key => $slide)
                          <div class="carousel-item @if($key == 0) active @endif" data-bs-interval="2000">
                            <a href="{{ route('single.post', $slide->id) }}">
                                <img src="{{ asset('image/'.$slide->image) }}" class="d-block w-100" alt="..." height="400px">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="bg-dark text-light p-1">{{ Str::limit($slide->title, 50) }}</h5>
                            </div>
                            </a>
                          </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0%; padding-right: 24px">
                <div class="row">
                    @foreach($featurePosts as $ftpost)
                    <div class="col-md-6" style="padding-right: 0%;">
                        <a href="{{ route('single.post', $ftpost->id) }}" class="text-decoration-none text-dark">
                            @if($ftpost->image)
                            <img src="{{ asset('image/'.$ftpost->image) }}" alt="" height="135px" width="100%">
                            @else
                            <img src="https://t3.ftcdn.net/jpg/01/22/45/42/240_F_122454272_3uT1sZUrm0qpOmRYcnnkc8bbbgMTkmFe.jpg" alt="" height="135px" width="100%">
                            @endif
                        <p class="px-1">{{ Str::limit($ftpost->title, 45) }}</p></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="breaking-news-section my-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="news-section border d-flex justify-content-between" style="min-height: 35px; background-color: #f3f3f3; padding-top: 5px;">
                    <div class="text-uppercase bg-dark text-light text-bold d-inline border">hot post </div>                    
                    <marquee class="d-block" onmouseover="this.stop();" onmouseout="this.start();" 
                        direction="left" behavior="scroll" scrollamount="7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, a necessitatibus. Quae fugit consectetur sunt.
                    </marquee>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area  mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-12 mb-4">
                            <div class="post-section" style="background-color: #f3f3f3;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="post-image p-1">
                                            @if($post->image)
                                            <img src="{{ asset('image/'.$post->image) }}" alt="" class='d-block mx-auto border' style="height: 250px; width: 250px;" />
                                            @else                            
                                            <img src="https://us.123rf.com/450wm/creativepriyanka/creativepriyanka1905/creativepriyanka190500599/124082851-demo-icon.jpg?ver=6" alt="" class='d-block mx-auto border' style="height: 250px; width: 250px;" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-area-section m-3 p-2">
                                            <div class="post-date-time p-2 bg-dark text-light d-inline"
                                                style="margin-left: -165px;">
                                                {{ $post->created_at->toFormattedDateString() }}
                                            </div>
                                            <div class="post-title h5">
                                                {{ Str::limit($post->title, 45) }} <span style="font-size: 18px;"><small>by
                                                        {{ $post->users->name }}</small></span>
                                            </div>
                                            <div class="post-body">
                                                <p>
                                                    {!! html_entity_decode(Str::limit($post->body, 100)) !!}
                                                </p>
                                            </div>
                                            <div class="post-tag mb-2">
                                                <small><strong>Category: </strong>{{ $post->categories->name }},  <strong>Tag: </strong>{{ $post->tag }}</small>
                                            </div>
                                            <div class="read-more-button">
                                                <a href="{{ route('single.post', $post->id) }}"
                                                    class="btn btn-outline-dark">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>


            <div class="col-md-3">
                <div class="sidebar p-3" style="background-color: #f3f3f3;">
                    <div class="categories-section py-2">
                        <div class="section-title h5">
                            Categories
                        </div>
                        <ul class="list-group">
                          @foreach($category as $item)  
                            <li class="list-group-item d-flex justify-content-between"> <a href="{{ route('home', ['category_id' => $item->id]) }}"
                                    style="text-decoration: none; color:black;"><i class="fas fa-chevron-right"></i> {{ $item->name }}</a><div class="d-inline"><span class="badge text-bg-secondary">{{ $item->posts_count }}</span></div></li>
                          @endforeach
                        </ul>
                    </div>

                    <hr>

                    <div class="search-post-section py-2">
                        <div class="section-title h5">
                            Search
                        </div>
                        <div class="search-field">
                            <form action="{{ route('home') }}" method="GET">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control form-control-sm" name="search"
                                        value="{{ !empty($queryData['search']) ? $queryData['search'] : '' }}"
                                        placeholder="Post title or tag..." aria-label="Post title or tag..."
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2"><button type="submit"
                                            class="btn btn-sm"><i class="fas fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <hr>

                    <div class="latest-post-section py-2">
                        <div class="section-title h5">
                            Tranding Posts
                        </div>
                        <ul class="list-group">
                            @foreach ($trandingPosts as $tp)
                                <li class="list-group-item"><i class="fas fa-copy"></i> <a
                                        href="{{ route('single.post', $tp->id) }}"
                                        style="text-decoration: none; color:black;">{{ Str::limit($tp->title, 45) }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <hr>

                    <div class="tags-section py-2">
                        <div class="section-title h5">
                            Tags
                        </div>
                        <ul class="list-group">
                            @foreach ($tags as $tag)
                                <li class="list-group-item"><a href="{{ route('home', ['tag' => $tag->tag]) }}"
                                        class="text-decoration-none text-dark text-lowercase"><i class="fas fa-tag "></i>
                                        {{ $tag->tag }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection