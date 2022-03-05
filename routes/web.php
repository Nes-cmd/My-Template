<?php
use Illuminate\Support\Facades\Route;


Route::view('home', 'dashboard')->middleware('auth')->name('dashboard.main');

Route::view('/','landing')->name('landing');
Route::view('pricing', 'pages.pricing')->name('pricing');
Route::view('blog-grid', 'pages.blog-grid')->name('blog-grid');
Route::view('blog-detail', 'pages.blog-detail')->name('blog-detail');

Route::middleware('auth')->group(function(){
    Route::view('analytics', 'mosaic.analytics')->name('dashboard.analytics');
    Route::view('fintech', 'mosaic.fintech')->name('dashboard.fintech');

    Route::view('cart-2', 'mosaic.cart-2')->name('ecommerce.cart-2');
    Route::view('cart-3', 'mosaic.cart-3')->name('ecommerce.cart-3');
    Route::view('cart', 'mosaic.cart')->name('ecommerce.cart');
    Route::view('customers', 'mosaic.customers')->name('ecommerce.customers');
    Route::view('orders', 'mosaic.orders')->name('ecommerce.orders');
    Route::view('invoices', 'mosaic.invoices')->name('ecommerce.invoices');
    Route::view('shop-2', 'mosaic.shop-2')->name('ecommerce.shop-2');
    Route::view('shop', 'mosaic.shop')->name('ecommerce.shop');
    Route::view('product', 'mosaic.product')->name('ecommerce.product');
    Route::view('pay', 'mosaic.pay')->name('ecommerce.pay');

    Route::view('component-accordion', 'mosaic.component-accordion')->name('component.accordion');
    Route::view('component-alert', 'mosaic.component-alert')->name('component.alert');
    Route::view('component-avatar', 'mosaic.component-avatar')->name('component.avatar');
    Route::view('component-badge', 'mosaic.component-badge')->name('component.badge');
    Route::view('component-breadcrumb', 'mosaic.component-breadcrumb');
    Route::view('component-button', 'mosaic.component-button')->name('component.button');
    Route::view('component-dropdown', 'mosaic.component-dropdown')->name('component.dropdown');
    Route::view('component-form', 'mosaic.component-form')->name('component.form');
    Route::view('component-icons', 'mosaic.component-icons')->name('component.icons');
    Route::view('component-modal', 'mosaic.component-modal')->name('component.modal');
    Route::view('component-pagination', 'mosaic.component-pagination')->name('component.pagination');
    Route::view('component-tabs', 'mosaic.component-tabs')->name('component.tabs');
    Route::view('component-tooltip', 'mosaic.component-tooltip')->name('component.tooltip');

    Route::view('feed', 'mosaic.feed')->name('community.feed'); 
    Route::view('forum-post', 'mosaic.forum-post')->name('community.forum-post');
    Route::view('forum', 'mosaic.forum')->name('community.forum');
    Route::view('meetups-post', 'mosaic.meetups-post')->name('community.meetups-post');
    Route::view('meetups', 'mosaic.meetups')->name('community.meetups');
    Route::view('profile', 'mosaic.profile')->name('community.profile');
    Route::view('users-tabs', 'mosaic.users-tabs')->name('community.users-tabs');
    Route::view('users-tiles', 'mosaic.user-tiles')->name('community.users-tiles');

    Route::view('credit-cards', 'mosaic.credit-cards')->name('finance.cards');
    Route::view('transaction-details', 'mosaic.transaction-details')->name('finance.details');
    Route::view('transactions', 'mosaic.transactions')->name('finance.transactions');

    Route::view('messages', 'mosaic.messages')->name('messages');
    Route::view('tasks', 'mosaic.tasks')->name('tasks');
    Route::view('inbox', 'mosaic.inbox')->name('inbox');
    Route::view('calendar', 'mosaic.calendar')->name('calendar');
    Route::view('campaigns', 'mosaic.campaigns')->name('campaigns');

    Route::view('plans', 'mosaic.plans')->name('settings.plans');
    Route::view('connected-apps', 'mosaic.connected-apps')->name('settings.apps');
    Route::view('feedback', 'mosaic.feedback')->name('settings.feedback');
    Route::view('billing', 'mosaic.billing')->name('settings.billing');
    Route::view('notifications', 'mosaic.notifications')->name('settings.notifications');
    Route::view('settings', 'mosaic.settings')->name('settings.account');

    Route::view('changelog', 'mosaic.changelog')->name('utility.changelog');
    Route::view('empty-state', 'mosaic.empty-state')->name('utility.empty-state');
    Route::view('faqs', 'mosaic.faqs')->name('utility.faqs');
    Route::view('roadmap', 'mosaic.roadmap')->name('utility.roadmap');
    Route::view('utility-404', 'mosaic.404')->name('utility.404');
    
    Route::view('onboarding-01', 'mosaic.onboarding-01')->name('onboarding.step1');
    Route::view('onboarding-02', 'mosaic.onboarding-02')->name('onboarding.step2');
    Route::view('onboarding-03', 'mosaic.onboarding-03')->name('onboarding.step3');
    Route::view('onboarding-04', 'mosaic.onboarding-04')->name('onboarding.step4');
    
    Route::view('reset-password', 'mosaic.reset-password')->name('auth.reset-password');
    Route::view('signin', 'mosaic.signin')->name('auth.signin');
    Route::view('signup', 'mosaic.signup')->name('auth.signup');
    
    
    
});