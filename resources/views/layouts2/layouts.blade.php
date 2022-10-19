@include('layouts2.header')

<body>
    <div class="se-pre-con"></div>
    <header>
        <!-- Mobile Menu Start -->
        @include('layouts2.mobile-menu')
        <!-- Mobile Menu End -->

        <!-- Top Header Start -->
        @include('layouts2.top-header')
        <!-- Top Header End -->

        <!-- Nav Brand Start -->
        @include('layouts2.nav-brand')
        <!-- Nav Brand End -->

        <!-- Navber Start -->
        @include('layouts2.navbar')
        <!-- Navber End -->
    </header>
    <!-- ===== Main Body Area Start ===== -->

    @section('content')
    @show

    <!-- ===== Main Body Area End ===== -->

    <!-- Footer Area Start -->
    @include('layouts2.footer')
    <!-- Footer Area End -->
    
    <!-- Sub-footer Area Start -->
    @include('layouts2.sub-footer')
    <!-- Sub-footer Area End -->
    