<?php
    $serviceContent = @getContent('service.content', true);
    $categories = App\Models\ServiceCategory::active()->get();
?>
<div class="section__content">
    <div class="row row--eq-height row--lg justify-content-center features features--web-hosting">
        <?php $__currentLoopData = $categories->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature text-sm-left">
                <div class="feature__icon">
                    <?php echo $category->svg; ?>

                </div>
                <div class="feature__body">
                    <h3 class="feature__title h5">
                        <?php echo e(__($category->name)); ?>

                    </h3>
                    <p class="feature__desc p-4">
                        <?php echo e(strLimit(__($category->short_description), 150)); ?>

                    </p>
                </div>
                <div class="feature__pricing pricing">
                    <span class="pricing__title">Starting at</span>
                    <div class="pricing__price">
                        <span class="pricing__amount h3"><?php echo e($general->cur_sym); ?> <?php echo e($category->price); ?></span>
                        <div class="pricing__period p-4"> /mo</div>
                    </div>
                </div>
                <div class="feature__actions">
                    <a href="<?php echo e(route('service.category', $category->slug)); ?>" class="btn btn--link has-arrow">
                        <div class="btn__text p-3">Learn More <svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/catepackages.blade.php ENDPATH**/ ?>