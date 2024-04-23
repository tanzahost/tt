<?php
    $count = App\Models\ShoppingCart::where('user_id', @auth()->user()->id ?? session()->get('randomId'))->count();
?>
<a class="add-cart me-2" href="<?php echo e(route('shopping.cart')); ?>">
    <i class="fas fa-shopping-cart">
        <span><?php echo e($count); ?></span>
    </i>
</a>

<?php /**PATH C:\Users\Almir Frances\Downloads\tanzahost.in\resources\views/templates/basic/partials/cart_widget.blade.php ENDPATH**/ ?>