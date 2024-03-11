<?php

use App\Http\Controllers\ProductReviewController;
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

Route::get('/', function () {
    return view('welcome');
});



//REST API FOR PRODUCT REVIEWS
Route::get('/product/review', [ProductReviewController::class, 'index'])->name('product.review');
Route::post('/product/review/store', [ProductReviewController::class, 'submit'])->name('product.review.store');
