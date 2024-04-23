<div class="py-2 breadcrumb-bg">
    <div class="container px-3 justify-content-between d-flex flex-wrap align-items-center">
        <div>
            <?php if(request()->routeIs('home')): ?>
                <?php echo e(__($pageTitle)); ?>

            <?php else: ?>
                <a href="<?php echo e(route('home')); ?>" class="anchor-decoration text--base"><?php echo app('translator')->get('Home'); ?></a> / <?php echo e(__($pageTitle)); ?>

            <?php endif; ?>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/breadcrumb.blade.php ENDPATH**/ ?>