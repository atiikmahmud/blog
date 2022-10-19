<section class="all-category-inner">
    <div class="container">
        <div class="row">

            @foreach ($singleCat as $catitem)
            @if($catitem->last_post)
            <div class="col-md-4 col-sm-4">
                <!-- sports -->
                <div class="sports-inner">
                    <h3 class="category-headding ">{{ $catitem->name }}</h3>
                    <div class="headding-border bg-color-1"></div>
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post title -->
                        <h3><a href="#">{{ Str::limit($catitem->last_post->title, 30) }}</a></h3>
                        <!-- post image -->
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('assets3/images/sports.jpg') }}" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="post-title-author-details">
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> Oct 6, 2016
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                        </div>
                        <p>{!! html_entity_decode(Str::limit($catitem->last_post->body, 80)) !!}</a></p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>