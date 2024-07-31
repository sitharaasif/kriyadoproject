

<?php $__env->startSection('content'); ?>
<main class="nxl-container">
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Discount Type Addition</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
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
                    <button type="submit" form="discountForm" class="btn btn-primary successAlertMessage">
                        <i class="feather-save me-2"></i>
                        <span>Save</span>
                    </button>
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
        <!-- Form for Adding Discount Type -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <form id="discountForm" action="<?php echo e(route('discounts.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label class="form-label">Discount Name <span class="text-danger">*</span></label>
                                <input type="text" name="discount" class="form-control" placeholder="Discount Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Discount</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- List of Discounts -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="mb-4">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="border-b">
                                        <th scope="row">Discount Name</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <?php echo e($discount->discount); ?>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="<?php echo e(route('admin.discountedit', $discount->id)); ?>" class="btn btn-primary">Edit</a>
                                                
                                                    <form action="<?php echo e(route('discounts.destroy', $discount->id)); ?>" method="POST" style="display:inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
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

<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/discountaddition.blade.php ENDPATH**/ ?>