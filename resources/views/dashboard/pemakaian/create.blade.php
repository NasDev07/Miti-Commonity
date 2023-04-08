@extends('layouts.admin_template')
@section('title', 'Pemakaian')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pemakaian /</span> Add
    </h4>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="col-lg-8">
                                <form method="POST" action="{{ route('pemakaian.store') }}"
                                    enctype="multipart/form-data" class="mt-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" required autofocus value="{{ old('title') }}">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="body" class="form-label">Body</label>
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
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
@endsection