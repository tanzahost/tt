<?php
    $footer = @getContent('footer.content', true);
    $policyPages = @getContent('policy_pages.element', orderById:true);
?>

<!-- Footer Section -->
<footer class="py-4 footer bg-dark-two">
    <div class="container">
        <div class="footer-content text-center">
            <a href="<?php echo e(route('home')); ?>" class="logo mb-3">
                <img src="<?php echo e(getImage(getFilePath('logoIcon') .'/logo.png')); ?>" alt="<?php echo app('translator')->get('logo'); ?>">
            </a>
            

            <p><?php echo e(__($general->site_name)); ?> &copy; <?php echo e(date('Y')); ?>. <?php echo app('translator')->get('All Rights Reserved'); ?></p>
        </div>
    </div>
</footer>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/footer.blade.php ENDPATH**/ ?>