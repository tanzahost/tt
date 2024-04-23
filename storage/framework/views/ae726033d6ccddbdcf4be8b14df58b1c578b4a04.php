<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tanzahost - <?php echo e($pageTitle); ?></title>
    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/global/css/all.min.css')); ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/global/css/line-awesome.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/main.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/custom.css')); ?>" />

    <?php echo $__env->yieldPushContent('style-lib'); ?>
    <?php echo $__env->yieldPushContent('style'); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W7DHW6CCT6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-W7DHW6CCT6');
    </script>


    <link rel="stylesheet" href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color=<?php echo e($general->base_color); ?>" />
</head>

<body>

    <!-- Overlay -->
    <div class="overlay"></div>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <?php echo $__env->yieldContent('app'); ?>

    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>" ></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/jquery.validate.js')); ?>" ></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/main.js')); ?>" ></script>

    <?php echo $__env->yieldPushContent('script-lib'); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        (function($) {
            "use strict";

            var currentUrl = '<?php echo e(url()->full()); ?>';

            $('.menu a[href="' + currentUrl + '"]').addClass('active');
            $('.menu .sub-menu a[href="' + currentUrl + '"]').closest('a').addClass('active');
            $('.menu .sub-menu a[href="' + currentUrl + '"]').parents('.has-sub-menu').find('a').eq(0).addClass('active')

            if ($('.navbar-nav .dropdown-menu a[href="' + currentUrl + '"]').length || "<?php echo e(@request()->routeIs('service.category')); ?>") {
                $('#navbarDropdown').addClass('active');
            }
        })(jQuery);
    </script>
    <script src="//code.tidio.co/jye9fnyegizqgbwgrekeder1kmred9vb.js" defer></script>

</body>

</html>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/layouts/app.blade.php ENDPATH**/ ?>