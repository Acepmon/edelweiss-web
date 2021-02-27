<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TermsConditionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

// Account
Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
Route::get('/cart', [AccountController::class, 'cart'])->name('cart');

// Custom Pages
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-us.store');
Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/terms-conditions', [TermsConditionsController::class, 'index'])->name('terms-conditions');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');

// Product Page
Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

// Dynamic Pages
Route::get('/{page:slug}/collections/{collection}', [CollectionController::class, 'index'])->name('collections.show');
Route::get('/{page:slug}', [PageController::class, 'index'])->where('page', '.*');