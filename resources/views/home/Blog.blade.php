@extends('welcome')

@section('content')

<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div
                class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Welcome to <span>Miti Community</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis voluptatibus nesciunt et
                    blanditiis nulla possimus laborum sed sapiente obcaecati suscipit!</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ route('dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                        @else
                        {{-- <a href="{{ route('login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline btn-get-started btn-sm">Login</a>
                        --}}
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn-get-started fw-bold">Join
                            Member</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="https://www.prakerja.go.id/images/logo-digital-platform/img_girl4.png"
                    class="img-fluid rounded" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>
</section>

<!-- ======= Clients Section ======= -->
@include('home')
<!-- End Clients Section -->

{{-- Produk --}}
<section id="portfolio" class="portfolio sections-bg">
    <div class="container">

        <div class="section-header">
            <h2>Gallery</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                autem uia reprehenderit sunt deleniti.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <div class="row gy-4 portfolio-container">
                @foreach ($dataProduk as $data)
                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/' . $data->image) }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('storage/' . $data->image) }}" class="img-fluid"
                                alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="{{ route('produks.show', $data->id) }}" title="More Details">{{ $data->title
                                    }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Portfolio Item -->
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section>
{{-- Ankir Produk --}}

<!-- ======= Frequently Asked Questions Section ======= -->
@include('home.Frequently')
<!-- End Frequently Asked Questions Section -->

{{-- Artikel --}}
<section id="recent-posts" class="recent-posts sections-bg">
    <div class="container">

        <div class="section-header">
            <h2>Artikel Tentang Miti</h2>
            <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
                architecto accusamus fugit aut qui distinctio.</p>
        </div>

        <div class="row gy-4">
            @forelse ($dataList as $item)
            <div class="col-xl-4 col-md-6">
                <article>
                    <div class="post-img">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="post-category text-primary">{{ $item->category->name }}</p>
                        <p class="post-date">
                            <time datetime="{{ $item->created_at->format('Y-m-d') }}"><i class="bi bi-clock"></i>
                                {{ $item->created_at->format('M j, Y') }}</time>
                        </p>
                    </div>
                    <h5 class="title">
                        <a href="{{ route('post.show', $item->id) }}">{{ $item->title }}</a>
                        {{-- <a href="{{ route('post.show', ['name' => $item->name]) }}">{{ $item->title }}</a> --}}

                        </h2>
                    </h5>
                    <a href="{{ route('post.show', $item->id) }}">Baca Selengkapnya
                    </a>
                </article>
            </div><!-- End post list item -->
            @empty
            <div class="page-wrap d-flex flex-row align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                            {{-- <span class="display-1 d-block">404</span>
                            <div class="mb-4 lead">not found.</div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div><!-- End recent posts list -->
    </div>
</section>
@endsection