<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Home</span>
    </a>
    <a class="nav-link" href="/users">
        <i class=" fas fa-building"></i><span>Usuarios</span>
    </a>
    @can('ver-blog')
    <a class="nav-link" href="{{ route('blogs.index') }}">
        <i class=" fas fa-building"></i><span>Blogs</span>
    </a>
    @endcan
    @can('ver-rol')
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class=" fas fa-building"></i><span>Roles</span>
    </a>
    @endcan
</li>
