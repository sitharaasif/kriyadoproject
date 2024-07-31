

<?php $__env->startSection('content'); ?>



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
                                    <form action="<?php echo e(route('admin.updatepackage', ['id' => $package->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('POST'); ?>  
                                        <input type="hidden" name="id" value="<?php echo e($package->id); ?>">
                                <div class="form-group">
                                    <label for="package_name">Package Name</label>
                                    <input type="text" id="package_name" name="package_name" class="form-control"
                                        value="<?php echo e($package->package_name); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                        value="<?php echo e($package->price); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration (days)</label>
                                    <input type="number" id="duration" name="duration" class="form-control"
                                        value="<?php echo e($package->duration); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="categories">Categories</label>
                                    <div class="form-group">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]" id="category-<?php echo e($category->id); ?>" value="<?php echo e($category->categories); ?>" 
                                                    <?php echo e(in_array($category->id, explode(',', $package->categories)) ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="category-<?php echo e($category->id); ?>">
                                                    <?php echo e($category->categories); ?>

                                                </label>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Update Package</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/editpackage.blade.php ENDPATH**/ ?>