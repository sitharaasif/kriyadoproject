<?php $__env->startSection('content'); ?>
<main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Create Ad</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Ads</a></li>
                    <li class="breadcrumb-item">Create</li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.ads.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3 row">
                                    <label for="countryInput" class="col-lg-4 col-form-label fw-semibold">Country:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="countryInput" name="country" placeholder="Enter country" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="stateInput" class="col-lg-4 col-form-label fw-semibold">State:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="stateInput" name="state" placeholder="Enter state" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="districtInput" class="col-lg-4 col-form-label fw-semibold">District:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="districtInput" name="district" placeholder="Enter district" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="imageInput" class="col-lg-4 col-form-label fw-semibold">Choose Image:</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" id="imageInput" name="image" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="postInput" class="col-lg-4 col-form-label fw-semibold">Link:</label>
                                    <div class="col-lg-8">
                                        <input type="url" class="form-control" id="postInput" name="link" placeholder="Link" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="expiryInput" class="col-lg-4 col-form-label fw-semibold">Set Expiry:</label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control" id="expiryInput" name="expiry" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="feather-save me-2"></i>Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="<?php echo e(route('admin.ads.create')); ?>" class="btn btn-primary">Create New Ad</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Expiry</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($ad->country); ?></td>
                                        <td><?php echo e($ad->state); ?></td>
                                        <td><?php echo e($ad->district); ?></td>
                                        <td><img src="<?php echo e(asset('storage/' . $ad->image)); ?>" alt="Ad Image" style="width: 100px;"></td>
                                        <td><a href="<?php echo e($ad->link); ?>" target="_blank"><?php echo e($ad->link); ?></a></td>
                                        <td><?php echo e($ad->expiry); ?></td>
                                        
                                            <td>
                                                <a href="<?php echo e(route('admin.ads.edit', $ad->id)); ?>" class="btn btn-primary">Edit</a>
                                                <form action="<?php echo e(route('admin.ads.destroy', $ad->id)); ?>" method="POST" style="display:inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ad?')">Delete</button>
                                                </form>
                                            </td>
                                    
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/ads.blade.php ENDPATH**/ ?>