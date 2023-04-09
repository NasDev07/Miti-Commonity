@extends('welcome')

@section('title', 'Gallery')

@section('content')

<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Gallery Miti Comunity</h2>
            <p>
                Miti Community didirikan oleh sekelompok mahasiswa IT yang ingin menciptakan wadah bagi mahasiswa untuk
                belajar, berdiskusi, dan berkolaborasi dalam bidang IT. Komunitas ini memiliki berbagai divisi, seperti
                divisi software development, divisi UI/UX design, divisi cybersecurity, dan divisi data science. Setiap
                divisi memiliki fokus dan kegiatan yang berbeda-beda, sehingga mahasiswa dapat memilih sesuai dengan
                minat dan bakat mereka.
            </p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-product">Galery</li>
                    {{-- <li data-filter=".filter-branding">branding</li>
                    <li data-filter=".filter-books">books</li> --}}
                </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-4 portfolio-container">
                @foreach ($dataProduk as $item)
                @if ($item->category_produk_id == '1')
                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="{{ route('produks.show', $item->id) }}" title="More Details">{{ $item->title
                                    }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- End Portfolio Item -->

                @foreach ($dataProduk as $data)
                @if ($data->category_produk_id == '2')
                <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
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
                @endif
                @endforeach

                @foreach ($dataProduk as $g)
                @if ($g->category_produk_id == '3')
                <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                    <div class="portfolio-wrap">
                        <a href="{{ asset('storage/' . $g->image) }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('storage/' . $g->image) }}" class="img-fluid"
                                alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="{{ route('produks.show', $g->id) }}" title="More Details">{{ $g->title }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div><!-- End Portfolio Container -->

        </div>

    </div>
</section>
@endsection