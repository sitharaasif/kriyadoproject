
@extends('vendors')

<div>
    @if(session()->has('successMessage'))
        <div class="alert alert-success">
           {{ session('successMessage') }}
        </div>
    @endif
    
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">4</a>
                <p>Step 4</p>
            </div>
        </div>
    </div>

    <!-- Step 1 -->
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="card-body p-0" id="vendor-create-steps">
                    <div class="step-title border-top">Shop Type</div>
                    <section class="step-body mt-4">
                        <form wire:submit.prevent="firstStepSubmit" id="shop-type">
                            <fieldset>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Shop Type</h2>
                                    <p class="text-muted">Select Shop type first.</p>
                                </div>
                                <fieldset>
                                    <div class="row flex-1 g-2">
                                        <div class="col-lg-6 h-100">
                                            <label class="w-100" for="online_store">
                                                <input class="card-input-element" type="radio" name="shop_type" id="online_store" value="online" wire:model="shop_type" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center mb-1">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-link-2"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Online Store</span>
                                                            <span class="d-block text-muted mb-0">Shop Anywhere, Anytime</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6 h-100">
                                            <label class="w-100" for="local_store">
                                                <input class="card-input-element" type="radio" name="shop_type" id="local_store" value="local" wire:model="shop_type">
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center mb-1">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-globe"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Local Store</span>
                                                            <span class="d-block text-muted mb-0">Community Focus, In-Person Experience</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                            <hr class="mb-5">
                            <fieldset>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Select Business Type</h2>
                                    <p class="text-muted">Business type</p>
                                </div>
                                <fieldset>
                                    <div class="row flex-1 g-2">
                                        <div class="col-lg-6 h-100">
                                            <label class="w-100" for="wholesale">
                                                <input class="card-input-element" type="radio" name="business_type" id="wholesale" value="wholesale" wire:model="business_type" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center mb-1">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-shopping-cart"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Wholesale</span>
                                                            <span class="d-block text-muted mb-0">Bulk Quantities, Discounted Prices</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="w-100" for="retail">
                                                <input class="card-input-element" type="radio" name="business_type" id="retail" value="retail" wire:model="business_type">
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center mb-1">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-shopping-cart"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Retail</span>
                                                            <span class="d-block text-muted mb-0">Individual Sales, Customer Focused</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                            <button type="button" class="btn btn-primary next-step" wire:click="firstStepSubmit">Next</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="card-body p-0" id="vendor-create-steps">
                    <div class="step-title border-top">Location Details</div>
                    <section class="step-body mt-4">
                        <form wire:submit.prevent="secondStepSubmit" id="location-details">
                            <fieldset>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Location Details</h2>
                                    <p class="text-muted">Enter the location details.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" id="country" class="form-control" wire:model="country" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" id="state" class="form-control" wire:model="state" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="district" class="form-label">District</label>
                                        <input type="text" id="district" class="form-control" wire:model="district" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="locality" class="form-label">Locality</label>
                                        <input type="text" id="locality" class="form-control" wire:model="locality" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="town" class="form-label">Town</label>
                                        <input type="text" id="town" class="form-control" wire:model="town" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" id="pincode" class="form-control" wire:model="pincode" required>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="button" class="btn btn-secondary prev-step" wire:click="previousStep">Previous</button>
                            <button type="button" class="btn btn-primary next-step" wire:click="secondStepSubmit">Next</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="card-body p-0" id="vendor-create-steps">
                    <div class="step-title border-top">Additional Details</div>
                    <section class="step-body mt-4">
                        <form wire:submit.prevent="submit" id="additional-details">
                            <fieldset>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Additional Details</h2>
                                    <p class="text-muted">Provide additional details.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="organizationName" class="form-label">Organization Name</label>
                                        <input type="text" id="organizationName" class="form-control" wire:model="organizationName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ownerName" class="form-label">Owner Name</label>
                                        <input type="text" id="ownerName" class="form-control" wire:model="ownerName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="mobilenumber" class="form-label">Mobile Number</label>
                                        <input type="text" id="mobilenumber" class="form-control" wire:model="mobilenumber" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="managerName" class="form-label">Manager Name</label>
                                        <input type="text" id="managerName" class="form-control" wire:model="managerName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="managerContact" class="form-label">Manager Contact Number</label>
                                        <input type="text" id="managerContact" class="form-control" wire:model="managerContact" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="land_phone" class="form-label">Land Phone</label>
                                        <input type="text" id="land_phone" class="form-control" wire:model="land_phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="website" class="form-label">Website</label>
                                        <input type="text" id="website" class="form-control" wire:model="website">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input type="file" id="logo" class="form-control" wire:model="logo">
                                        @error('logo') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="store_photo" class="form-label">Store Photo</label>
                                        <input type="file" id="store_photo" class="form-control" wire:model="store_photo">
                                        @error('store_photo') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <button type="button" class="btn btn-secondary prev-step" wire:click="previousStep">Previous</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('stepChanged', (step) => {
            // Handle step change event if needed
        });
    });
</script>
@endpush
@endsection