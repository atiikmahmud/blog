<section class="news-feed paddb">
    <div class="container">
        <div class="row row-margin">
            <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                <div id="news-feed-carousel" class="owl-carousel owl-theme">
                    
                    @foreach($sliders as $slider)
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb-4" src="{{ asset('assets3/images/slider/slide-02.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-2">{{ $slider->categories->name }} </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">
                                    {{ Str::limit($slider->title, 40) }} </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> 
                                        {{ $slider->created_at->toFormattedDateString() }}
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb-4" src="{{ asset('assets3/images/slider/slide-03.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-3">FASHION </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb-4" src="{{ asset('assets3/images/slider/slide-04.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-4">FASHION </span>
                                <h3 class="post-title"><a href="#" rel="bookmark">The 20 free things in Sydney with your girlfriend </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- right side post -->
            <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                <section class="articale-inner">
                    <div class="row">
                        <div id="content-slide-5" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row rn_block">
                                    
                                    @foreach($latestPosts as $lspost)
                                    <div class="col-md-6 col-sm-6 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('assets3/images/articale.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge bg-danger" style="color: black;"> {{ $lspost->categories->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">{{ Str::limit($lspost->title, 40) }}</a></h4>
                                        </div>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> 
                                                {{ $lspost->created_at->toFormattedDateString() }}
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="col-md-6 col-sm-6 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('assets3/images/articale02.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_three">S</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                        </div>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('assets3/images/articale03.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                        </div>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('assets3/images/articale04.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                        </div>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>