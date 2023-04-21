<?php

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
    Route::resource('bcategories', BcatergoryController::class);

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

    //*********** FOOTBALL ************//

});
