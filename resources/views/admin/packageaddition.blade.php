@extends('admin.style')

@section('content')
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

    <!-- Include jQuery (Select2 depends on it) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

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
                                <form action="{{ route('admin.packagestore') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label">Add Package <span class="text-danger">*</span></label>
                                        <input type="text" name="package_name" class="form-control"
                                            placeholder="Add package" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Price <span class="text-danger">*</span></label>
                                        <input type="text" name="price" class="form-control" placeholder="Price"
                                            required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Duration in Days <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="duration" class="form-control"
                                            placeholder="Duration in days" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Select Categories <span
                                                class="text-danger">*</span></label>
                                                <div class="form-group">
                                                    @foreach ($categories as $category)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="categories[]" id="category-{{ $category->id }}" value="{{ $category->categories }}">
                                                            <label class="form-check-label">
                                                                {{ $category->categories }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Table -->
            <div class="card-body custom-card-action p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="border-b">
                                <th>Package</th>
                                <th>Price</th>
                                <th>Duration in Days</th>
                                <th>Categories</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $package)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            {{ $package->package_name }}
                                        </div>
                                    </td>
                                    <td>{{ $package->price }}</td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">{{ $package->duration }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark">{{ $package->categories }}</span>
                                    </td>
                                    {{-- <td>
                                        @foreach (explode(',', $package->categories) as $categoryName)
                                            <span class="badge bg-info">{{ $categoryName }}</span>
                                        @endforeach
                                    </td> --}}

                                    <td class="text-end">
                                        <div class="d-flex align-items-center gap-3">
                                        
                                            <button type="button" class="btn btn-primary" onclick="window.location='{{ route('admin.editpackage', ['id' => $package->id]) }}'">Edit</button>

                                            <form action="{{ url('/admin/package/' . $package->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
