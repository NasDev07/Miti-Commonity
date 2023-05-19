@extends('welcome')

@section('title', 'Detail Team')

@section('content')
<header class="header">
    <div class="container">
        <h1 class="text-center fw-bold text-white">{{ $teamdetail->author->name }}</h1>
    </div>
</header>

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4">
                <article class="blog-details">
                    <div class="member">
                        <img src="{{ asset('storage/' . $teamdetail->image) }}" alt="" class="img-fluid rounded">
                    </div>
                    <h2 class="section-title mt-4 fw-semibold">My Contact</h2>
                    <div class="section-content">
                        <div style="text-align: justify">
                            <p>Email : <strong>{{ $teamdetail->author->email }}</strong></p>
                            <p>Universitas : <strong>{{ $teamdetail->univ }}</strong></p>
                            <p>WA : <strong>{{ $teamdetail->whatsapp }}</strong></p>
                            <p>Address : <strong>{{ $teamdetail->location }}</strong></p>
                            <p>Gender : <strong>{{ $teamdetail->gender }}</strong></p>
                        </div>
                        <div class="social mt-4">
                            <a href="{{ $teamdetail->akungit }}" target="_black"><img src="/img/gethub.png" alt=""></a>
                            <a href="{{ $teamdetail->akunig }}" target="_black"><img src="/img/instagram.png"
                                    alt=""></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-8">
                <article class="blog-details">
                    <div class="content" style="text-align: justify">
                        {!! $teamdetail->body !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
