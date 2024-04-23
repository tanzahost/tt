<?php $__env->startSection('main'); ?>

    <?php echo $__env->make('templates.basic.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('templates.basic.partials.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.basic.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>