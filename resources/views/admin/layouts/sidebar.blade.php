<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{url('/image/logo-x-white.png')}}" alt="" class="d-inline" height="50px" width="120px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if($title == 'Dashboard') active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Post Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
    <!-- Nav Item - Charts -->
    <li class="nav-item  @if($title == 'Posts') active @endif">
        <a class="nav-link" href="{{ route('admin.posts') }}">
            <i class="fas fa-poll-h"></i>
            <span>Posts</span></a>
    </li>

    <li class="nav-item  @if($title == 'Add Post') active @endif">
        <a class="nav-link" href="{{ route('admin.add.post') }}">
            <i class="fas fa-file-signature"></i>
            <span>Add Post</span></a>
    </li>

    <li class="nav-item  @if($title == 'Comments') active @endif">
        <a class="nav-link" href="{{ route('admin.comments') }}">
            <i class="fas fa-comment-alt"></i>
            <span>Comments</span></a>
    </li>

    <li class="nav-item  @if($title == 'Messages') active @endif">
        <a class="nav-link" href="{{ route('admin.messages') }}">
            <i class="fas fa-envelope"></i>
            <span>Messages</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
    <!-- Nav Item - Charts -->
    <li class="nav-item  @if($title == 'Users') active @endif">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item  @if($title == 'Admin Users') active @endif">
        <a class="nav-link" href="{{ route('admin.admin.users') }}">
            <i class="fas fa-user-shield"></i>
            <span>Admin Users</span></a>
    </li>

    <li class="nav-item  @if($title == 'Add User') active @endif">
        <a class="nav-link" href="{{ route('admin.add.user') }}">
            <i class="fas fa-user-plus"></i>
            <span>Add User</span></a>
    </li>    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>