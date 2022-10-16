<!-- Header Start -->
@include('test.layouts.header')
<!-- Header End -->

    <!-- Topbar Start -->
    @include('test.layouts.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('test.layouts.navbar')
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    @include('test.layouts.slider')
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    @include('test.layouts.breaking-news')
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    @include('test.layouts.featured-post')
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Latest Posts Start -->
                    @include('test.layouts.latest-post')
                    <!-- Latest Posts End -->
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    @include('test.layouts.social-follow')
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    @include('test.layouts.ads')
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    @include('test.layouts.tranding-post')
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    @include('test.layouts.newsletter')
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    @include('test.layouts.tags')
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    @include('test.layouts.footer')
    <!-- Footer End -->