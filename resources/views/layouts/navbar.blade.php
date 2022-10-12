<nav class="navbar navbar-expand-lg bg-light shadow sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{url('/image/blog-logo.png')}}" alt="" class="d-inline" height="35px" width="35px">
        <div class="brand-title d-inline">
          Blog
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if($title == 'Home') active @endif" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == 'Posts') active @endif" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == 'About Us') active @endif" href="/about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == 'Contacts') active @endif" href="/contacts">Contacts</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
          
          @if(auth()->user())
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::user()->profile_photo_path)
                  <img src="/storage/profile-photos/{{basename(Auth::user()->profile_photo_path)}}" alt="{{ Auth::user()->name }}" class="d-inline border rounded-circle" height="30px" width="30px">&ensp;
                  {{ Auth::user()->name }}
                @else
                  <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="d-inline border rounded-circle" height="30px" width="30px">&ensp;
                  {{ Auth::user()->name }}
                @endif
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('add.post') }}">Add Post</a></li>
                @if(Auth::user()->role == 1)
                  <li><a class="dropdown-item" href="{{ route('admin.index') }}">Admin Panel</a></li>
                @endif
                <li><a class="dropdown-item" href="{{ route('list.post') }}">Posts</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>

          @else
          
            <li class="nav-item">
                <a class="nav-link @if($title == 'Register') active @endif" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($title == 'Login') active @endif" href="/login">Login</a>
            </li>            
          
          @endif
        </ul>
      </div>
    </div>
</nav>