<?php
    $serviceContent = @getContent('service.content', true);
    $categories = App\Models\ServiceCategory::active()->get();
?>
<section class="section">
    <span class="anchor-target" id="hosting-plans-for-every-website"></span>
    <div class="container">
        <h2 class="section__title">
            <?php echo e(__(@$serviceContent->data_values->heading)); ?>

        </h2>
        <p class="section__subtitle p-1">
            <?php echo e(__(@$serviceContent->data_values->subheading)); ?>

         </p>
        
        <?php echo $__env->make('templates.basic.partials.catepackages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/sections/packages.blade.php ENDPATH**/ ?>