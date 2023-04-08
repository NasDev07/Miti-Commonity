@extends('layouts.admin_template')
@section('title', 'Gambar')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Gambar /</span> Add
    </h4>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="col-lg-8">
                                <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data"
                                    class="mt-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" autofocus value="{{ old('title') }}">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="categories" class="form-label">Category</label>
                                        <select name="category_produk_id" class="form-select">
                                            @foreach ($categories as $categories)
                                            @if (old('categories') == $categories->id)
                                            <option value="{{ $categories->id }}" selected>
                                                {{ $categories->name }}
                                            </option>
                                            @else
                                            <option value="{{ $categories->id }}">
                                                {{ $categories->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Post Image</label>
                                        <img class="img-preview img-fluid my-3 col-md-3">
                                        <input class="form-control  @error('image') is-invalid @enderror" type="file"
                                            id="image" name="image" value="{{ old('image') }}"
                                            onchange="proviewImage()">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <input type="submit" value="Update" id="save" name="save"
                                            class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function proviewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
</script>
@endsection