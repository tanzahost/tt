<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ReasonController;
use App\Http\Controllers\Admin\FeatureController;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::controller('CronController')->prefix('cron')->group(function () {
    Route::get('/', 'cron')->name('cron');
    Route::get('/all', 'all')->name('cron.all');
});

// User Support Ticket
Route::controller('TicketController')->prefix('ticket')->name('ticket.')->group(function () {
    Route::get('/', 'supportTicket')->name('index');
    Route::get('new', 'openSupportTicket')->name('open');
    Route::post('create', 'storeSupportTicket')->name('store');
    Route::get('view/{ticket}', 'viewTicket')->name('view');
    Route::post('reply/{ticket}', 'replyTicket')->name('reply');
    Route::post('close/{ticket}', 'closeTicket')->name('close');
    Route::get('download/{ticket}', 'ticketDownload')->name('download');
});

Route::get('app/deposit/confirm/{hash}', 'Gateway\PaymentController@appDepositConfirm')->name('deposit.app.confirm');

//Shopping Cart
Route::controller('CartController')->prefix('shopping/cart')->name('shopping.')->group(function(){
    Route::get('/','cart')->name('cart');
    Route::post('add/domain','addDomain')->name('cart.add.domain');
    Route::post('add/service','addService')->name('cart.add.service');
    Route::get('empty', 'empty')->name('cart.empty');
    Route::get('remove/{id}', 'remove')->name('cart.remove');
    Route::get('config/domain/{cartId}', 'configDomain')->name('cart.config.domain');
    Route::post('config/domain/update', 'configDomainUpdate')->name('cart.config.domain.update');
    Route::get('config/service/{cartId}', 'configService')->name('cart.config.service');
    Route::post('config/service/update', 'configServiceUpdate')->name('cart.config.service.update');
    Route::post('coupon', 'coupon')->name('cart.coupon');
    Route::post('coupon/remove', 'couponRemove')->name('cart.coupon.remove');
    Route::post('domain/renew', 'domainRenew')->name('cart.domain.renew')->middleware('auth');
});

Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing');
Route::get('/security-technology', [PagesController::class, 'security'])->name('security');
Route::get('/support', [PagesController::class, 'support'])->name('support');
Route::get('/control-panel', [PagesController::class, 'panel'])->name('panel');
Route::get('/uptime', [PagesController::class, 'uptime'])->name('uptime');
Route::get('/reviews', [PagesController::class, 'reviews'])->name('reviews');
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');


Route::get('/blogs', [SiteController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}/{id}', [SiteController::class, 'blogDetails'])->name('blog.details');


Route::controller(SiteController::class)->group(function () {
    // Specific routes first
    Route::get('/', 'index')->name('home');
    Route::get('/register/domain', 'registerDomain')->name('register.domain');
    Route::get('/search/domain', 'searchDomain')->name('search.domain');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactSubmit');
    Route::get('/change/{lang?}', 'changeLanguage')->name('lang');
    Route::get('/cookie-policy', 'cookiePolicy')->name('cookie.policy');
    Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{slug}/{id}', 'blogDetails')->name('blog.details');
    Route::get('/policy/{slug}/{id}', 'policyPages')->name('policy.pages');
    Route::get('/placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');
    Route::post('/subscribe', 'subscribe')->name('subscribe');

    // More specific parameterized routes
    Route::get('/{categorySlug}/{productSlug}/{id}', 'productConfigure')->name('product.configure');
    Route::get('/{slug?}', 'serviceCategory')->name('service.category');
    // Route::get('/services/{slug?}', 'serviceCategory')->name('service.category');


    // General slug-based routes
    Route::get('pages/{slug}', 'pages')->name('pages');
});


// Route::controller(SiteController::class)->group(function () {

// });



Route::prefix('man')->group(function () {
    Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
    Route::post('/banners', [BannerController::class, 'store'])->name('admin.banners.store');
    Route::get('/banners/{banner}/edit', [BannerController::class, 'edit'])->name('admin.banners.edit');
    Route::post('/banners/{banner}', [BannerController::class, 'update'])->name('admin.banners.update');
    Route::delete('/banners/{banner}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');

    Route::get('/features', [FeatureController::class, 'index'])->name('admin.features.index');
    Route::get('/features/create', [FeatureController::class, 'create'])->name('admin.features.create');
    Route::post('/features', [FeatureController::class, 'store'])->name('admin.features.store');
    Route::get('/features/{feature}/edit', [FeatureController::class, 'edit'])->name('admin.features.edit');
    Route::post('/features/{feature}', [FeatureController::class, 'update'])->name('admin.features.update');
    Route::delete('/features/{feature}', [FeatureController::class, 'destroy'])->name('admin.features.destroy');

    Route::get('/reasons', [ReasonController::class, 'index'])->name('admin.reasons.index');
    Route::get('/reasons/create', [ReasonController::class, 'create'])->name('admin.reasons.create');
    Route::post('/reasons', [ReasonController::class, 'store'])->name('admin.reasons.store');
    Route::get('/reasons/{reason}/edit', [ReasonController::class, 'edit'])->name('admin.reasons.edit');
    Route::post('/reasons/{reason}', [ReasonController::class, 'update'])->name('admin.reasons.update');
    Route::delete('/reasons/{reason}', [ReasonController::class, 'destroy'])->name('admin.reasons.destroy');

    Route::get('/faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/faqs/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::post('/faqs/{faq}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
});
