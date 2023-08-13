<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('shop', [App\Http\Controllers\FrontendController::class, 'shopview']);
Route::get('shop/single-product/{id}', [App\Http\Controllers\FrontendController::class, 'showItem']);
Route::get('add-to-cart/{id}', [App\Http\Controllers\FrontendController::class, 'addToCart']);
Route::get('remove-from-cart/{id}', [App\Http\Controllers\FrontendController::class, 'remove'])->name('remove-from-cart');
Route::get('guestcheckout', [App\Http\Controllers\FrontendController::class, 'Checkout']);
Route::post('purchase', [App\Http\Controllers\FrontendController::class, 'Purchase']);

Route::get('checkout', function(){
    return view('checkout');
});

Route::get('blog', function(){
    return view('blog');
});
Route::get('about', function(){
    return view('about');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('cart', function(){
    return view('cart');
})->name('cart');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index']);

    Route::group(['prefix' => 'products'], function(){
        Route::get('/show-products', [App\Http\Controllers\Admin\ProductsController::class, 'index']);
        Route::get('/add-product', [App\Http\Controllers\Admin\ProductsController::class, 'create']);
        Route::post('/save-product', [App\Http\Controllers\Admin\ProductsController::class, 'store'])->name('save-product');
    });

    Route::group(['prefix' => 'shopping'], function(){
        Route::get('list-shopping', [App\Http\Controllers\Admin\ShoppingController::class, 'index']);
        Route::get('add-shopping-product', [App\Http\Controllers\Admin\ShoppingController::class, 'create']);
        Route::post('save-shopping', [App\Http\Controllers\Admin\ShoppingController::class, 'store']);
    });
});



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
