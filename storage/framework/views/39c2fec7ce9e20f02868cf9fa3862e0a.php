

<?php $__env->startSection('content'); ?>
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
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
                                <form action="<?php echo e(route('admin.packagestore')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
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
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="categories[]" id="category-<?php echo e($category->id); ?>" value="<?php echo e($category->categories); ?>">
                                                            <label class="form-check-label">
                                                                <?php echo e($category->categories); ?>

                                                            </label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <?php echo e($package->package_name); ?>

                                        </div>
                                    </td>
                                    <td><?php echo e($package->price); ?></td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark"><?php echo e($package->duration); ?></span>
                                    </td>
                                    <td>
                                        <span class="badge bg-gray-200 text-dark"><?php echo e($package->categories); ?></span>
                                    </td>
                                    

                                    <td class="text-end">
                                        <div class="d-flex align-items-center gap-3">
                                        
                                            <button type="button" class="btn btn-primary" onclick="window.location='<?php echo e(route('admin.editpackage', ['id' => $package->id])); ?>'">Edit</button>

                                            <form action="<?php echo e(url('/admin/package/' . $package->id)); ?>" method="POST" style="display:inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/packageaddition.blade.php ENDPATH**/ ?>