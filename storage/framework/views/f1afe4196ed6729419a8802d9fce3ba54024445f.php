<?php
    $count = App\Models\ShoppingCart::where('user_id', @auth()->user()->id ?? session()->get('randomId'))->count();
?>


<li menuItemName="View Cart" class="nav__item    nav-item-cart nav-item-icon-only "
                         id="Primary_Navbar-View_Cart">
                         <a class="nav__link" href="<?php echo e(route('shopping.cart')); ?>" data-url="<?php echo e(route('shopping.cart')); ?>">
                             <span class="nav__link-icon">
                                 <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M8 2.66699L4 8.00033V26.667C4 27.3742 4.28095 28.0525 4.78105 28.5526C5.28115 29.0527 5.95942 29.3337 6.66667 29.3337H25.3333C26.0406 29.3337 26.7189 29.0527 27.219 28.5526C27.719 28.0525 28 27.3742 28 26.667V8.00033L24 2.66699H8Z"
                                         stroke="#CC2628" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                     <path d="M4 8H28" stroke="#CC2628" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                     <path
                                         d="M21.3337 13.333C21.3337 14.7475 20.7718 16.1041 19.7716 17.1042C18.7714 18.1044 17.4148 18.6663 16.0003 18.6663C14.5858 18.6663 13.2293 18.1044 12.2291 17.1042C11.2289 16.1041 10.667 14.7475 10.667 13.333"
                                         stroke="#CC2628" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                 </svg>
                                 <span class="nav-badge badge badge-primary-faded"><span><?php echo e($count); ?></span></span>
                             </span>
                             <span class="nav__link-text p-2">View Cart</span>
                         </a>
</li>
<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/cart_widget2.blade.php ENDPATH**/ ?>