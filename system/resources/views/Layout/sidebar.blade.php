<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @php

        function checkRouteActive($route)
        {
            if (Route::current()->uri == $route) {
                return 'active';
            }
        }
    @endphp
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('public') }}/tempelate/dist/img/logo_sp_3.PNG" class="brand-image" style="opacity: 1">
        SEE PLANNER
        <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">ADMIN</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">NAVIGASI MENU</li>
                <li class="nav-item">
                    <a href="{{ url('Admin/dashboard') }}" class="nav-link {{ checkRouteActive('Admin/dashboard') }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p class="text">DASHBOARD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Admin/produk') }}" class="nav-link {{ checkRouteActive('Admin/produk') }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p class="text">Produk</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-file nav-icon"></i>
                        <p>
                            Galery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('Admin/pengajuan/pengajuan-masuk') }}"
                                class="nav-link {{ checkRouteActive('Admin/pengajuan/pengajuan-masuk') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text">PENGAJUAN MASUK</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('Admin/pengajuan/sk-pengajuan') }}"
                                class="nav-link {{ checkRouteActive('Admin/pengajuan/sk-pengajuan') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text">SK PENGAJUAN</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ url('Admin/galery') }}" class="nav-link {{ checkRouteActive('Admin/galery') }}">
                        <i class="fas fa-archive nav-icon"></i>
                        <p class="text">Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Admin/artikel') }}" class="nav-link {{ checkRouteActive('Admin/artikel') }}">
                        <i class="fas fa-upload nav-icon"></i>
                        <p class="text">Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Admin/user') }}" class="nav-link {{ checkRouteActive('Admin/user') }}">
                        <i class="fas fa-user nav-icon"></i>
                        <p class="text">User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
