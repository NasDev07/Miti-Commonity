@extends('welcome')

@section('title','Cara Pakai')

@section('content')

<section id="faq" class="faq">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="content px-xl-5">

                    <h3>Pertanyaan Populer <strong> Miti Community</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="accordion accordion-flush" id="faqlist">
                    @foreach ($carapakai as $item)
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-{{ $loop->iteration }}">
                                <span class="num">{{ $loop->iteration }}</span>
                                {{ $item->title }}
                            </button>
                        </h3>
                        <div id="faq-content-{{ $loop->iteration }}" class="accordion-collapse collapse"
                            data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                {!! $item->body !!}
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                    @endforeach
                </div>


            </div>
        </div>

    </div>
</section>
@endsection