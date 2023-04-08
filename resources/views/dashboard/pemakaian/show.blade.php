@extends('layouts.admin_template')
@section('title', 'Pemakaian')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h2 class="my-3">{{ $pakai['title'] }}</h2>

            <a href="{{ route('pemakaian.index') }}" class="btn btn-success btn-sm"> <i class="bi bi-arrow-left"></i>
                Back to
                my post</a>

            <article>
                {!! $pakai->body !!}
            </article>
        </div>
    </div>
</div>
@endsection