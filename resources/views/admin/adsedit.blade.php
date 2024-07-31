@extends('admin.style')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Ad</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.ads') }}">Ads</a></li>
                    <li class="breadcrumb-item">Edit</li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="countryInput" class="col-lg-4 col-form-label fw-semibold">Country:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="countryInput" name="country" value="{{ $ad->country }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="stateInput" class="col-lg-4 col-form-label fw-semibold">State:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="stateInput" name="state" value="{{ $ad->state }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="districtInput" class="col-lg-4 col-form-label fw-semibold">District:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="districtInput" name="district" value="{{ $ad->district }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="imageInput" class="col-lg-4 col-form-label fw-semibold">Choose New Image (optional):</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="imageInput" name="image">
                                        @if($ad->image)
                                            <img src="{{ asset('storage/' . $ad->image) }}" alt="Current Ad Image" style="width: 100px; margin-top: 10px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postInput" class="col-lg-4 col-form-label fw-semibold">Link:</label>
                                    <div class="col-lg-8">
                                        <input type="url" class="form-control" id="postInput" name="link" value="{{ $ad->link }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="expiryInput" class="col-lg-4 col-form-label fw-semibold">Set Expiry:</label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control" id="expiryInput" name="expiry" value="{{ $ad->expiry }}" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="feather-save me-2"></i>Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
