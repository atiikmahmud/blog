<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
        <div class="sidebar-brand-icon">
           <i class="fab fa-blogger-b"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Blog</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.posts') }}">
            <i class="fas fa-file-powerpoint"></i>
            <span>Posts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.add.post') }}">
            <i class="fas fa-file-signature"></i>
            <span>Add Posts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.comments') }}">
            <i class="fas fa-comment-alt"></i>
            <span>Comments</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.add.user') }}">
            <i class="fas fa-user-plus"></i>
            <span>Add User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin User Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.admin.users') }}">
            <i class="fas fa-user-shield"></i>
            <span>Admin Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('add.admin.user') }}">
            <i class="fas fa-user-plus"></i>
            <span>Add Admin User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>