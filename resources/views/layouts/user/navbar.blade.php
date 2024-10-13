<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
<<<<<<< HEAD
                <!-- Logo -->
                <a class="navbar-brand logo_h" href="{{ route('user.dashboard') }}">
                    <img src="{{ asset('assets/templates/user/img/logo.png') }}" alt="Logo">
                </a>
                <!-- Toggle button for mobile view -->
=======
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="{{ asset('assets/templates/user/img/logo.png') }}" alt="">
                </a>
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<< HEAD

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('user.dashboard') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.logout') }}">Keluar</a>
                        </li>
                    </ul>

                    <!-- Poin Pengguna di Mobile View -->
                    @if(Auth::check())
                        <ul class="nav navbar-nav d-lg-none">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Poin: <strong>{{ Auth::user()->point }}</strong></a>
                            </li>
                        </ul>
                    @endif
=======
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                        </li>
                    </ul>
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->
