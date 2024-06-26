<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('wisata.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-map"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GorTour </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard/wisata*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('wisata.index') }}">
                    <i class="fa fa-map"></i>
                    <span>Wisata</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Charts -->
            <li class="nav-item {{ Request::is('dashboard/kuliner*') ? 'active' : '' }}">
                {{-- bingung euyyyy --}}
                <a class="nav-link" href="{{ route('kuliner.index') }}">
                    <i class="fa fa-plate-wheat" aria-hidden="true"></i>
                    <span>Kuliner</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                {{-- bingung euyyyy --}}
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fa fa-solid fa-user" aria-hidden="true"></i>
                    <span>User</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
