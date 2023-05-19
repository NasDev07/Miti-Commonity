@extends('welcome')

@section('title', 'Team')

@section('content')

<section id="team" class="team">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
            <h2>Daftar Anggota MITI</h2>
        </div>

        <div class="row gy-4">
            @foreach ($teammiti as $d)
            <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="{{ asset('storage/' . $d->image) }}" class="img-fluid" alt="{{ $d->title }}">
                    <h4>
                        <a href="{{ route('team.show', $d->id) }}">{{ $d->author->name }}</a>
                    </h4>
                    <div class="social">
                        <a href="{{ $d->akungit }}" target="_black"><img src="/img/gethub.png" alt=""></a>
                        <a href="{{ $d->akunig }}" target="_black"><img src="/img/instagram.png" alt=""></a>
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach
        </div>

    </div>
</section>

@endsection
