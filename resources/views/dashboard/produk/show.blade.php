@extends('layouts.admin_template')
@section('title', 'Gambar')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h2 class="my-3">{{ $produk['title'] }}</h2>

            <a href="{{ route('produk.index') }}" class="btn btn-success btn-sm"> <i class="bi bi-arrow-left"></i> Back
                to
                my post</a>
            @if ($produk->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $produk->image) }}" class="card-img-top mt-3"
                    alt="{{ $produk->categori->name }}" class="img-fluid ">
            </div>
            @else
            <img src="{{ asset('images/avatar.jpg') }}" alt="Avatar" width="200px">
            @endif
        </div>
    </div>
</div>
@endsection