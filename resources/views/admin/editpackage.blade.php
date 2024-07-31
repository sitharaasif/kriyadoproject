@extends('admin.style')

@section('content')



        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Package</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Create</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="page-header-right-items">
                            <div class="d-flex d-md-none">
                                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                    <i class="feather-arrow-left me-2"></i>
                                    <span>Back</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-md-none d-flex align-items-center">
                            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                                <i class="feather-align-right fs-20"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <form action="{{ route('admin.updatepackage', ['id' => $package->id]) }}" method="POST">
                                        @csrf
                                        @method('POST')  
                                        <input type="hidden" name="id" value="{{ $package->id }}">
                                <div class="form-group">
                                    <label for="package_name">Package Name</label>
                                    <input type="text" id="package_name" name="package_name" class="form-control"
                                        value="{{ $package->package_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                        value="{{ $package->price }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration (days)</label>
                                    <input type="number" id="duration" name="duration" class="form-control"
                                        value="{{ $package->duration }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="categories">Categories</label>
                                    <div class="form-group">
                                        @foreach ($categories as $category)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]" id="category-{{ $category->id }}" value="{{ $category->categories }}" 
                                                    {{ in_array($category->id, explode(',', $package->categories)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="category-{{ $category->id }}">
                                                    {{ $category->categories }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Update Package</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection