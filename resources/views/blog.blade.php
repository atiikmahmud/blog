@extends('layouts.layouts')
@section('title', $title)

@section('content')

    <div class="blog-page-title p-3">
        <h3 class="text-center">Blog Posts</h3>
    </div>

    <div class="blog-area">
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
                                                <img src="https://us.123rf.com/450wm/creativepriyanka/creativepriyanka1905/creativepriyanka190500599/124082851-demo-icon.jpg?ver=6"
                                                    alt="" height="250px" width="250px">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-area-section m-3 p-2">
                                                <div class="post-date-time p-2 bg-dark text-light d-inline"
                                                    style="margin-left: -165px;">
                                                    {{ $post->created_at->diffForHumans() }}
                                                </div>
                                                <div class="post-title h3">
                                                    {{ $post->title }} <span style="font-size: 18px;"><small>by
                                                            {{ $post->users->name }}</small></span>
                                                </div>
                                                <div class="post-body">
                                                    <p>
                                                        {{ Str::limit($post->body, 100) }}
                                                    </p>
                                                </div>
                                                <div class="post-tag mb-2">
                                                    <small><strong>Tags: </strong>{{ $post->tag }}</small>
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
                                <li class="list-group-item"><i class="fas fa-chevron-right"></i> <a href="#"
                                        style="text-decoration: none; color:black;">Hair Care</a></li>

                                <li class="list-group-item"><i class="fas fa-chevron-right"></i> <a href="#"
                                        style="text-decoration: none; color:black;">Skin Care</a></li>

                                <li class="list-group-item"><i class="fas fa-chevron-right"></i> <a href="#"
                                        style="text-decoration: none; color:black;">Hot News</a></li>
                            </ul>
                        </div>

                        <hr>

                        <div class="search-post-section py-2">
                            <div class="section-title h5">
                                Search
                            </div>
                            <div class="search-field">
                                <form action="{{ route('blog') }}" method="GET">
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
                                Latest Posts
                            </div>
                            <ul class="list-group">
                                @foreach ($latestPost as $lp)
                                    <li class="list-group-item"><i class="fas fa-copy"></i> <a
                                            href="{{ route('single.post', $lp->id) }}"
                                            style="text-decoration: none; color:black;">{{ $lp->title }}</a></li>
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
                                    <li class="list-group-item"><a href="{{ route('blog', ['tag' => $tag->tag]) }}"
                                            class="text-decoration-none text-dark"><i class="fas fa-tag "></i>
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
