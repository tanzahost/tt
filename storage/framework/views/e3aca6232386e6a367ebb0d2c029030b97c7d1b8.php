<?php if($general->multi_language): ?>
    <select class="langSel form-control-sm w-auto">
        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->code); ?>" <?php if(session('lang')==$item->code): ?> selected <?php endif; ?>><?php echo e(__($item->name)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php $__env->startPush('script'); ?>
        <script>
            (function ($) { 
                "use strict"; 
        
                $(".langSel").on("change", function() {
                    window.location.href = "<?php echo e(route('home')); ?>/change/"+$(this).val() ;
                });
        
            })(jQuery);
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?><?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/components/language.blade.php ENDPATH**/ ?>