@extends('admin.style')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">
        <div class="page-header">
            
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Partner Registration</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Create Partner</li>
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
    </div>
    <br>

    <div class="main-content">
        <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <h4 class="mb-4 text-center">Partner Registration Form</h4>
                        <form action="{{ route('admin.partnerstore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="organizationName" class="form-label">Name of Organization</label>
                                <input type="text" class="form-control" id="organizationName" name="organization_name" required>
                            </div>

                            <div class="mb-4">
                                <label for="mobileNumber" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobileNumber" name="mobile_number" required>
                            </div>

                            <div class="mb-4">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" name="email_address" required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>

                            <div class="mb-4">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>

                            <div class="mb-4">
                                <label for="website" class="form-label">Website</label>
                                <input type="url" class="form-control" id="website" name="website">
                            </div>

                            <!-- Shop and Business Details -->
                            <div >
                        
                                <h5 class="mb-4 text-center">Shop and Business Details</h5>

                                <div class="mb-4">
                                    <label for="shopType" class="form-label">Shop Type</label>
                                    <div id="shopType">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="wholesale" name="shop_type" value="Wholesale">
                                            <label class="form-check-label" for="wholesale">
                                                Wholesale
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="retail" name="shop_type" value="Retail">
                                            <label class="form-check-label" for="retail">
                                                Retail
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="wholesale_retail" name="shop_type" value="Wholesale & Retail">
                                            <label class="form-check-label" for="wholesale_retail">
                                                Wholesale & Retail
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="service_based" name="shop_type" value="Service based">
                                            <label class="form-check-label" for="service_based">
                                                Service based
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="mb-4">
                                    <label for="shopType" class="form-label">business type</label>
                                    <div id="shopType">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="local store" name="business_type" value="local store">
                                            <label class="form-check-label" for="local store">
                                                local store
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="onine store" name="business_type" value="onine store">
                                            <label class="form-check-label" for="onine store">
                                                onine store
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                

                                <div class="mb-4">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                </div>

                                <div class="mb-4">
                                    <label for="district" class="form-label">District</label>
                                    <input type="text" class="form-control" id="district" name="district" required>
                                </div>

                                <div class="mb-4">
                                    <label for="locality" class="form-label">Shop Locality</label>
                                    <input type="text" class="form-control" id="locality" name="locality" required>
                                </div>

                                <div class="mb-4">
                                    <label for="town" class="form-label">Nearby Town</label>
                                    <input type="text" class="form-control" id="town" name="town" required>
                                </div>

                                <div class="mb-4">
                                    <label for="pincode" class="form-label">PIN CODE</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" required>
                                </div>

                                <div class="mb-4">
                                    <label for="ownerName" class="form-label">Name of Owner (optional)</label>
                                    <input type="text" class="form-control" id="ownerName" name="owner_name">
                                </div>

                                <div class="mb-4">
                                    <label for="managerName" class="form-label">Key Person / Manager Name</label>
                                    <input type="text" class="form-control" id="managerName" name="manager_name" required>
                                </div>

                                <div class="mb-4">
                                    <label for="managerContact" class="form-label">Key Person / Manager Contact Number</label>
                                    <input type="tel" class="form-control" id="managerContact" name="manager_contact" required>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div id="wizard2">
                                <h5 class="mb-4 text-center">Contact Information</h5>

                                <div class="mb-4">
                                    <label for="landPhone" class="form-label">Land Phone</label>
                                    <input type="tel" class="form-control" id="landPhone" name="land_phone">
                                </div>

                                <div class="mb-4">
                                    <label for="registeredAddress" class="form-label">Registered Address</label>
                                    <input type="text" class="form-control" id="registeredAddress" name="registered_address" required>
                                </div>

                                <div class="mb-4">
                                    <label for="facebookLink" class="form-label">Facebook Link</label>
                                    <input type="url" class="form-control" id="facebookLink" name="facebook_link">
                                </div>

                                <div class="mb-4">
                                    <label for="instagramLink" class="form-label">Instagram Link</label>
                                    <input type="url" class="form-control" id="instagramLink" name="instagram_link">
                                </div>

                                <div class="mb-4">
                                    <label for="googleMapLink" class="form-label">Google Map Link</label>
                                    <input type="url" class="form-control" id="googleMapLink" name="google_map_link">
                                </div>

                                <div class="mb-4">
                                    <label for="youtubeLink" class="form-label">YouTube Link</label>
                                    <input type="url" class="form-control" id="youtubeLink" name="youtube_link">
                                </div>
                            </div>

                            <!-- Working Hours and Additional Details -->
                            <div id="wizard3">
                                <h5 class="mb-4 text-center">Working Hours and Additional Details</h5>

                                <div class="mb-4">
                                    <label for="workingHours" class="form-label">Normal Working Hours</label>
                                    <input type="text" class="form-control" id="workingHours" name="working_hours">
                                </div>

                                <div class="mb-4">
                                    <label for="homeDelivery" class="form-label">Home Delivery / Home Service</label>
                                    <select class="form-select" id="homeDelivery" name="home_delivery">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="storePhoto" class="form-label">Photo of Store (optional)</label>
                                    <input type="file" class="form-control" id="storePhoto" name="store_photo">
                                </div>
                            </div>

                            <!-- Discount Entry -->
                            <div id="discountEntry">
                                <h5 class="mb-4 text-center">Discount Entry</h5>

                                <div class="mb-4">
                                    <label for="totalBillDiscount" class="form-label">Total Bill Discount</label>
                                    <select class="form-select" id="totalBillDiscount" name="total_bill_discount">
                                        @foreach($discounts as $discount)
                                            <option value="{{ $discount->id }}">{{ $discount->discount }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="discountType" class="form-label">Direct Discount Type</label>
                                    <select class="form-select" id="discountType" name="discount_type">
                                        <option value="flat">Flat</option>
                                        <option value="percentage">%</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="discountValue" class="form-label">Discount Value</label>
                                    <input type="text" class="form-control" id="discountValue" name="discount_value">
                                </div>
                            </div>

                            <div class="d-flex gap-2 text-center pt-4">
                                    <button type="submit" class="btn btn-primary">save</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
