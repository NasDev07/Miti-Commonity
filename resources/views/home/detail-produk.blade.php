@extends('welcome')

@section('title', 'Detail Produk')

@section('content')
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-7">
                <article class="blog-details">
                    <div class="post-img">
                        @if ($dataproduk->image != '')
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $dataproduk->image) }}" alt="" class="img-fluid">
                        </div>
                        @else
                        <div class="mb-2">
                            <img src="{{ asset('images/avatar.jpg') }}" alt="Avatar" width="200px">
                        </div>
                        @endif
                    </div>
                    <div class="content">
                        {!! $dataproduk->body !!}
                    </div><!-- End post content -->
                    <br><br>
                    <a href="/cara-pemakaian">Cara Memakai Produk</a>
                </article><!-- End blog post -->
            </div>

            <div class="col-lg-5">
                <div class="sidebar">
                    <div class="sidebar-item recent-posts">
                        <div class="mt-1">
                            <li class="d-flex align-items-end"><i class="bi bi-person"></i> <a href="#">{{
                                    $dataproduk->author->name }}</a></li>
                            <div class="post-item my-2">
                                <h2 class="fw-bold">{{ $dataproduk->title }}</h2>
                                <h6><span class="fw-bold">Rp.</span> {{ $dataproduk->harga }}</h6>
                            </div>
                            <span>{{ $dataproduk->categori->name }}</span>
                            <hr>
                            <li class="d-flex justify-content-between">
                                <p>Pengiriman :</p>
                                <p> Aceh Utara, Lhokseumawe </p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <p>Paket :</p>
                                <p> Platinum, Silver, Gold </p>
                            </li>
                            <li class="d-flex justify-content-start">
                                <a href="#" class="btn btn-success">Order</a>
                            </li>
                        </div>
                    </div>
                </div><!-- End sidebar recent posts-->
            </div><!-- End Blog Sidebar -->

        </div>
    </div>

    </div>
</section>
@endsection