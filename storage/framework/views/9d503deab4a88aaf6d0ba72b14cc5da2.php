<?php $__env->startSection('content'); ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <div class="auth-creative-inner">
        <div class="creative-card-wrapper">
            <div class="card my-4 overflow-hidden" style="z-index: 1">
                <div class="row flex-1 g-0">
                    <div class="col-lg-12 h-100 my-auto">
                        <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50">
                            <img src="<?php echo e(asset('build/assets/images/logo-abbr.png')); ?>" alt="Logo" class="img-fluid">
                        </div>
                        <div class="card-body p-sm-5">
                            <div class="m-header text-center mb-3">
                                <a href="#" class="b-brand">
                                    <img src="<?php echo e(asset('build/assets/images/logo-full.png')); ?>" class="logo logo-lg" alt="Full Logo">
                                </a>
                            </div>
                            <h2 class="fs-20 fw-bolder mb-4 text-center">Vendor Register</h2>
                            <h4 class="fs-13 fw-bold mb-2">Manage all your Kriyado CRM</h4>
                            <p class="fs-12 fw-medium text-muted">Let's get you all set up so you can verify your personal account and begin setting up your profile.</p>
                            <div class="card border-top-0">
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('vendor');

$__html = app('livewire')->mount($__name, $__params, 'lw-3084537204-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                <div class="mt-5 text-muted text-center">
                                    <span>Already have an account?</span>
                                    <a href="<?php echo e(route('login')); ?>" class="fw-bold">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


<?php echo $__env->make('vendor.stylevendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\KriyadoProject\resources\views/vendor/vendordashboard.blade.php ENDPATH**/ ?>