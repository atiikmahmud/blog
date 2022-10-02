<nav class="navbar navbar-expand-lg bg-light shadow sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="https://www.freeiconspng.com/thumbs/blogger-logo-icon-png/blogger-logo-icon-png-10.png" alt="" height="35px" width="35px">
        Blog
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
            <a class="nav-link @if($title == 'Blog') active @endif" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == 'About Us') active @endif" href="/about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($title == 'Contacts') active @endif" href="/contacts">Contacts</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>
      </div>
    </div>
</nav>