<?php

use App\Http\Controllers\BcategoryController;
use App\Http\Controllers\BcommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BtagController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PcategoryController;
use App\Http\Controllers\PcommentController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PtagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/'.app()->getLocale());

Route::group(['prefix' => app()->getLocale()], function () {

    Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

    Route::get('/prieres', [App\Http\Controllers\FrontendController::class, 'prayers'])->name('prayer');

    Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');

    Route::get('/blog-cat/{category}', [App\Http\Controllers\FrontendController::class, 'blog_category'])->name('blog_category');

    Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group( function () {

    Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');

    Route::get('/dash-contact', [App\Http\Controllers\BackendController::class, 'contact'])->name('dash-contact');

    //*********** BLOG ************//

    /** BLOG CATEGORIES */
    Route::resource('bcategories', BcategoryController::class);

    /** BLOG TAGS */
    Route::resource('btags', BtagController::class);

    /** BLOGS */
    Route::resource('blogs', BlogController::class);

    /** BLOGS COMMENTS */
    Route::resource('bcomments', BcommentController::class);

    //*********** PRODUCT ************//

    /** PRODUCT CATEGORIES */
    Route::resource('pcategories', PcategoryController::class);

    /** PRODUCT TAGS */
    Route::resource('ptags', PtagController::class);

    /** PRODUCTS */
    Route::resource('products', ProductController::class);

    /** PRODUCTS COMMENTS */
    Route::resource('pcomments', PcommentController::class);

    /** FAQS */
    Route::resource('faqs', FAQController::class);

    /** PRAYERS */
    Route::resource('prayers', PrayerController::class);



});
