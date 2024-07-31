

<?php $__env->startSection('content'); ?>
<main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Edit Ad</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.ads')); ?>">Ads</a></li>
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
                            <form action="<?php echo e(route('admin.ads.update', $ad->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="mb-3 row">
                                    <label for="countryInput" class="col-lg-4 col-form-label fw-semibold">Country:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="countryInput" name="country" value="<?php echo e($ad->country); ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="stateInput" class="col-lg-4 col-form-label fw-semibold">State:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="stateInput" name="state" value="<?php echo e($ad->state); ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="districtInput" class="col-lg-4 col-form-label fw-semibold">District:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="districtInput" name="district" value="<?php echo e($ad->district); ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="imageInput" class="col-lg-4 col-form-label fw-semibold">Choose New Image (optional):</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="imageInput" name="image">
                                        <?php if($ad->image): ?>
                                            <img src="<?php echo e(asset('storage/' . $ad->image)); ?>" alt="Current Ad Image" style="width: 100px; margin-top: 10px;">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postInput" class="col-lg-4 col-form-label fw-semibold">Link:</label>
                                    <div class="col-lg-8">
                                        <input type="url" class="form-control" id="postInput" name="link" value="<?php echo e($ad->link); ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="expiryInput" class="col-lg-4 col-form-label fw-semibold">Set Expiry:</label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control" id="expiryInput" name="expiry" value="<?php echo e($ad->expiry); ?>" required>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/adsedit.blade.php ENDPATH**/ ?>