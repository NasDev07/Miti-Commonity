@extends('layouts.admin_template')
@section('title', 'Account')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> My Account</h4>
    @include('notif')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <form id="formAccountSettings" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <h5 class="card-header">Profile Details</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('storage/' . ($data->image ?? '')) }}"
                                alt="{{ ($data->author->name ?? '') }}" class="img-preview d-block rounded"
                                height="100%" width="100" id="uploadedAvatar" />

                            <div class="button-wrapper">
                                <label for="image" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="image" name="image"
                                        value="{{ old('image', $data->image  ?? '') }}" class="account-file-input"
                                        hidden accept="{{ asset('storage/' . ($data->image ?? '')) }}"
                                        onchange="proviewImage()" required />
                                </label>
                                <p class="text-muted mb-0">Allowed JPG, PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-person"></i> </span>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ old('name', $data->author->name  ?? '') }}" placeholder="Name"
                                        disabled />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-envelope-at"></i> </span>
                                    <input class="form-control" type="email" id="email" name="email"
                                        placeholder="john.doe@example.com"
                                        value="{{ old('email', $data->author->email  ?? '') }}" disabled />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="location" class="form-label">Location</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i> </span>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="location" value="{{ old('location', $data->location  ?? '') }}"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="whatsapp">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-whatsapp"></i> </span>
                                    <input type="number" id="whatsapp" name="whatsapp" class="form-control"
                                        placeholder="0822-6742-9797"
                                        value="{{ old('whatsapp', $data->whatsapp  ?? '') }}" required />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i> </span>
                                    <select id="gender" class="select2 form-select" name="gender">
                                        <option value="">Select Language</option>
                                        <option value="laki-laki" {{ old('gender', $data->gender ?? '') == 'laki-laki' ?
                                            'selected' : '' }} required >
                                            Laki-Laki</option>
                                        <option value="perempuan" {{ old('gender', $data->gender ?? '') == 'perempuan' ?
                                            'selected' : '' }} required>
                                            Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="data_lahir" class="form-label">Birth Date</label>
                                <input type="date" class="form-control" id="data_lahir" name="data_lahir"
                                    value="{{ old('data_lahir', $data->data_lahir  ?? '') }}" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="univ" class="form-label">School</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-house-fill"></i> </span>
                                    <input type="text" class="form-control" id="univ" name="univ" placeholder="school"
                                        value="{{ old('univ', $data->univ  ?? '') }}" required />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nim" class="form-label">NIM/NIK</label>
                                <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM/NIK"
                                    value="{{ old('nim', $data->nim  ?? '') }}" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunig" class="form-label">Link Account iG </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-instagram"></i> </span>
                                    <input type="text" class="form-control" id="akunig" name="akunig"
                                        placeholder="Paste url akun iG"
                                        value="{{ old('akunig', $data->akunig  ?? '') }}" required />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akungit" class="form-label">Link Account GitHub </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bi bi-github"></i> </span>
                                    <input type="text" class="form-control" id="akungit" name="akungit"
                                        placeholder="Paste url akun GitHub"
                                        value="{{ old('akungit', $data->akungit  ?? '') }}" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Tentang Anda</label>
                                <input id="body" type="hidden" name="body" value="{{ old('body', $data->body  ?? '') }}"
                                    placeholder="Tentang Anda" required />
                                <trix-editor input="body"></trix-editor>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2" id="save" name="save">Save
                                changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
                <h5 class="card-header">Delete Data Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form action="{{ route('data-user.destroy', $data->id ?? '') }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger deactivate-account"
                            onclick="return confirm('Are you sure?')">Delate
                            Account</button>
                    </form>
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
