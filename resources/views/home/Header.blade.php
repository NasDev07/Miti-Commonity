<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-tiktok"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-whatsapp"></i></a>
        </div>
    </div>
</section>
<!-- End Top Bar -->
{{-- header --}}
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('miti.png') }}" alt="Miti" width="100" class="rounded">
            {{-- <h1>Miti Community</h2> --}}
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/produks') }}">Gallery</a></li>
                <li><a href="{{ url('/blog-posts') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>

                <li>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-flex">
                        @auth
                        <a href="{{ route('dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 fw-bold">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 fw-bold">Login
                        </a>
                        <a href="">|</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 fw-bold btn btn-primary btn-sm">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>