
<?php $__env->startSection('content'); ?>
<main class="nxl-container">
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10"> Categories</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        
                        
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.categoriestore')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="mb-4">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                            <button id="editButton" class="btn btn-primary mt-2">Edit</button>
                        </div>
                        
                        <script>
                            document.getElementById('editButton').addEventListener('click', function() {
                                window.location.href = '<?php echo e(url('admin/editcategories')); ?>';
                            });
                        </script>
                        
                    </div>
                </div>
            </div> 
            <div></div>
        </div>
        
    </div>
    
    <!-- [ Main Content ] end -->
  
    

</main>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/admin/categories.blade.php ENDPATH**/ ?>