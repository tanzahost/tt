<?php $__env->startSection('app'); ?>    
    <?php echo $__env->make($activeTemplate.'partials.auth_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make($activeTemplate.'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make($activeTemplate.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php $__env->startPush('script'); ?>
    <script>
        "user strict";

        $('form').on('submit', function () {
            if ($(this).hasClass('form')) { 
                return false;
            }
            if ($(this).hasClass('exclude')) { 
                return false;
            }
            if ($(this).valid()) {
                $(':submit', this).attr('disabled', 'disabled');
            }
        });

    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make($activeTemplate.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/layouts/master.blade.php ENDPATH**/ ?>