@extends('admin.style')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Partner List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="
                        ">Home</a></li>
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
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="{{ route('vendor.createpartner') }}" class="btn btn-primary">Create Partner</a>
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
    </div>
<br>
    <div class="main-content">
        <div class="row">
            <div class="col-xxl-8">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Partners List</h5>
                        <div class="card-header-action">
                            <div class="card-header-btn">
                                <div data-bs-toggle="tooltip" title="Delete">
                                    <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                </div>
                                <div data-bs-toggle="tooltip" title="Refresh">
                                    <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                </div>
                                <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                    <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                    <div data-bs-toggle="tooltip" title="Options">
                                        <i class="feather-more-vertical"></i>
                                    </div>
                                </a>
                                <!-- Dropdown items can be added here if needed -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body custom-card-action p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="border-b">
                                        <th scope="row">Partners list</th>
                                        <th>email</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach($partners as $partner)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                {{ $partner->organization_name }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-gray-200 text-dark">{{ $partner->email_address }}</span>
                                        </td>
                                        <td>
                                            {{ $partner->status ?? 'Pending' }}
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('admin.partnerview', $partner->id) }}"><i class="feather-view"></i></a>
                                            <a href="{{ route('admin.partnerdelete', $partner->id) }}" onclick="return confirm('Are you sure you want to delete this partner?')"><i class="feather-trash"></i></a>
                                            <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection
