@extends('layouts.admin_template')
@section('title', 'Gambar')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Gambar /</span> List
    </h4>
    <div class="d-flex justify-content-between">
        <a href="/produkDelete" class="btn btn-info btn-sm">Show Deleted Data Gambar</a>
        <a href="{{ route('categoryproduk.index') }}" class="menu-link btn btn-info btn-sm ">
            <div data-i18n="Account Settings">category</div>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            @include('notif')
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title text-primary">List Data</h5>

                                <a href="{{ route('produk.create') }}">
                                    <button class="btn btn-primary">Tambah</button>
                                </a>
                            </div>
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->categori->name }}</td>
                                        <td>
                                            <a href="{{ route('produk.show', $item->id) }}" class="badge bg-info"><i
                                                    class="bi bi-eye-fill"></i></a>

                                            <a href="{{ route('produk.edit', $item->id) }}" class="badge bg-warning"><i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="bi bi-x-circle-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $produk->withQueryString()->links() }}
    </div>
</div>
@endsection