{{-- HEADER --}}
    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="{{ url('/') }}" class="logo m-0">GorTour <span class="text-primary">.</span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                    <li class="{{ Request::is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="has-children {{ Request::is('destinasi/*') || Request::is('kotabogor') || Request::is('kabupatenbogor') ? 'active' : '' }}">
                        <a href="#">Destinasi</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/destinasi/wisata') }}">Destinasi Wisata</a></li>
                            <li><a href="{{ url('/destinasi/kuliner') }}">Destinasi Kuliner</a></li>
                            <li><a href="{{ url('/kotabogor') }}">Kota Bogor</a></li>
                            <li><a href="{{ url('/kabupatenbogor') }}">Kabupaten Bogor</a></li>

                        </ul>
                    </li>
                    <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="{{ url('/about') }}">Tentang</a></li>
                    <li class="{{ Request::is('contact*') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li class="{{ Request::is('login*') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                </ul>

                <a href="#"
                    class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </nav>
{{--END HEADER --}}
