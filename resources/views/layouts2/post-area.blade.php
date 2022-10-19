<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <!-- left content inner -->
            <section class="recent_news_inner">
                <h3 class="category-headding ">RECENT NEWS</h3>
                <div class="headding-border"></div>
                <div class="row">
                    <div id="content-slide" class="owl-carousel">
                        <!-- item-1 -->
                        @foreach ($featurePosts as $ftpost)
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- image -->
                                <h3><a href="#">{{ Str::limit($ftpost->title, 40) }}</a></h3>
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('assets3/images/recent_news_01.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                        <a target="_blank" href="#" class="post-badge bg-danger" style="color: black;">{{ $ftpost->categories->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> 
                                        {{ $ftpost->created_at->toFormattedDateString() }}
                                    </div>
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                                <p>{!! html_entity_decode(Str::limit($ftpost->body, 80)) !!}<a href="#">Read more...</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                
                <div class="row rn_block">
                    <h3 class="category-headding ">Top 9 Posts</h3>
                    <div class="headding-border bg-color-3"></div>
                    
                    @foreach ($all_posts as $post)
                    <div class="col-md-4 col-sm-6 padd">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- image -->
                            <div class="post-thumb">
                                <a href="#">
                                    <img class="img-responsive" src="{{ asset('assets3/images/recent_news_04.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-info meta-info-rn">
                                <div class="slide">
                                    <a target="_blank" href="#" class="post-badge bg-danger" style="color: black;">{{ $post->categories->name }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-title-author-details">
                            <h4><a href="#">{{ Str::limit($post->title, 40) }}</a></h4>
                            <div class="post-editor-date">
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> {{ $post->created_at->toFormattedDateString() }}
                                </div>
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>                
        </div>
        <!-- Sidebar Area Start -->
        <div class="col-md-4 col-sm-4 left-padding">
            <!-- right content wrapper -->
            <div class="input-group search-area">
                <!-- search area -->
                <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                <div class="input-group-btn">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            <!-- /.search area -->

            <aside>
                <h3 class="category-headding ">CATEGORIES</h3>
                <div class="headding-border bg-color-2"></div>
                <div class="cats-widget">
                    <ul>
                        @foreach ($all_categories as $cat)                            
                        <li class=""><a href="#" title="Title goes here.">{{ $cat->name }}</a> <span>{{ $cat->posts_count }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            
            <div class="tab-inner">
                <ul class="tabs">
                    <li><a href="#">POPULAR</a></li>
                    <li><a href="#">MOST VIEWED</a></li>
                </ul>
                <hr>
                <!-- tabs -->
                <div class="tab_content">
                    <div class="tab-item-inner">
                        
                        @foreach($trandingPosts as $tdpost)
                        <div class="box-item wow fadeIn" data-wow-duration="1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('assets3/images/popular_news_01.jpg') }}" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-1">
                                        <a href="#">{{ $tdpost->categories->name }}</a>
                                    </h6>
                                <h3 class="td-module-title"><a href="#">{{ Str::limit($tdpost->title, 40) }}</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> 
                                        {{ $tdpost->created_at->toFormattedDateString() }}
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- / tab item -->
                    <div class="tab-item-inner">
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('assets3/images/popular_news_01.jpg') }}" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-5">
                                        <a href="#">BUSINESS</a>
                                    </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('assets3/images/popular_news_02.jpg') }}" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('assets3/images/popular_news_03.jpg') }}" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb" src="{{ asset('assets3/images/popular_news_04.jpg') }}" alt="" height="80" width="90"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / tab item -->
                </div>
                <!-- / tab_content -->
            </div>
            <!-- / tab -->
        </div>
        <!-- Sidebar Area End -->
    </div>
    <!-- row end -->
</div>