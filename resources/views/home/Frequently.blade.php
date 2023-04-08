{{-- @extends('welcome')

@section('content') --}}

<section id="faq" class="faq">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="content px-xl-5">

                    <h3>Pertanyaan Populer <strong> Miti</strong></h3>
                    <a href="/cara-pemakaian">Lanjutan</a>
                </div>
            </div>

            <div class="col-lg-8">

                <div class="accordion accordion-flush" id="faqlist">
                    @foreach ($pakai as $item)
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
{{-- @endsection --}}