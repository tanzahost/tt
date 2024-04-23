<?php $__env->startSection('content'); ?>
    <div class="pt-60 pb-60 bg--light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card custom--card style-two">
                        <div class="card-header">
                            <h6 class="card-title text-center mb-0"><?php echo e(__($pageTitle)); ?></h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <?php echo csrf_field(); ?>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('First Name'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="firstname" value="<?php echo e($user->firstname); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('Last Name'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="lastname" value="<?php echo e($user->lastname); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('E-mail Address'); ?> <span class="text--danger">*</span></label>
                                            <input class="form-control form--control h-45" value="<?php echo e($user->email); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('Mobile Number'); ?> <span class="text--danger">*</span></label>
                                            <input class="form-control form--control h-45" value="<?php echo e($user->mobile); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('Country'); ?> <span class="text--danger">*</span></label>
                                            <input class="form-control form--control h-45" value="<?php echo e(@$user->address->country); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('State'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="state" value="<?php echo e(@$user->address->state); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('Zip Code'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="zip" value="<?php echo e(@$user->address->zip); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('City'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="city" value="<?php echo e(@$user->address->city); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('Address'); ?> <span class="text--danger">*</span></label>
                                            <input type="text" class="form-control form--control h-45" name="address" value="<?php echo e(@$user->address->address); ?>">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn--base w-100"><?php echo app('translator')->get('Submit'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/user/profile/profile_setting.blade.php ENDPATH**/ ?>