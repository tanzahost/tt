<div class="header">
    <div class="container">
        <div class="header-bottom">
            <div class="header-bottom-area align-items-center">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(getImage(getFilePath('logoIcon') . '/logo.png')); ?>" alt="<?php echo app('translator')->get('logo'); ?>">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Services'); ?></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo e(route('user.service.list')); ?>"><?php echo app('translator')->get('My Services'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('pricing')); ?>"><?php echo app('translator')->get('Order New Service'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Domains'); ?></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo e(route('user.domain.list')); ?>"><?php echo app('translator')->get('My Domains'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('register.domain')); ?>"><?php echo app('translator')->get('Register New Domain'); ?></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('user.invoice.list')); ?>"><?php echo app('translator')->get('Invoices'); ?></a>
                    </li>
                    <li>
                        <a href="#0"><?php echo app('translator')->get('Support Ticket'); ?></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo e(route('ticket.open')); ?>"><?php echo app('translator')->get('Create New'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('ticket.index')); ?>"><?php echo app('translator')->get('My Ticket'); ?></a>
                            </li>
                        </ul>
                    </li>

                    <?php if($general->deposit_module): ?>
                        <li>
                            <a href="#0"><?php echo app('translator')->get('Deposit'); ?></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo e(route('user.deposit.index')); ?>"><?php echo app('translator')->get('Deposit Money'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('user.deposit.history')); ?>"><?php echo app('translator')->get('Deposit Log'); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li>
                        <a href="#0"><?php echo app('translator')->get('Account'); ?></a>
                        <ul class="sub-menu">

                            <li>
                                <a href="<?php echo e(route('user.transactions')); ?>"><?php echo app('translator')->get('Transactions'); ?></a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('user.email.history')); ?>"><?php echo app('translator')->get('Email Log'); ?></a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('user.profile.setting')); ?>"><?php echo app('translator')->get('Profile Setting'); ?></a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('user.change.password')); ?>"><?php echo app('translator')->get('Change Password'); ?></a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('user.twofactor')); ?>"><?php echo app('translator')->get('2FA Security'); ?></a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="d-flex align-items-lg-center ms-xl-2 ms-auto me-xl-0 me-2">
                    <?php echo $__env->make($activeTemplate . 'partials.cart_widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if (isset($component)) { $__componentOriginalc42c9808c3bf01021fc91c40d7fd767e12b42d83 = $component; } ?>
<?php $component = App\View\Components\Language::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('language'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Language::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc42c9808c3bf01021fc91c40d7fd767e12b42d83)): ?>
<?php $component = $__componentOriginalc42c9808c3bf01021fc91c40d7fd767e12b42d83; ?>
<?php unset($__componentOriginalc42c9808c3bf01021fc91c40d7fd767e12b42d83); ?>
<?php endif; ?>
                </div>
                <div class="header-trigger-wrapper d-flex d-xl-none align-items-center">
                    <div class="header-trigger">
                        <div class="header-trigger__icon"> <i class="las la-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/auth_header.blade.php ENDPATH**/ ?>