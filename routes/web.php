<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteRegistrar;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Users Routes
Route::get('/',[IndexController::class,'welcome'])->name('welcome');
Route::get('/all-users',[IndexController::class,'allUsers'])->name('all.user');

Route::group(['middleware'=>['auth']],function(){
    Route::get('add-to-cart/{bookId}',[IndexController::class,'addToCart'])->name('add.to.cart');
    Route::get('cart',[IndexController::class,'cart'])->name('cart');
    Route::patch('update-cart/{cartId}',[IndexController::class,'updateCart'])->name('update.cart');
    Route::delete('remove-item-from-cart/{cartId}',[IndexController::class,'removeItemFromCart'])->name('remove.item.from.cart');
    Route::get('checkout',[IndexController::class,'checkout'])->name('checkout');
    Route::post('order',[IndexController::class,'order'])->name('order');
    Route::get('thankyou/{orderId}',[IndexController::class,'thankyou'])->name('thankyou');
    Route::get('orders',[IndexController::class,'allOrders'])->name('orders');
});

//  Admin Routes
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('add-book',[DashboardController::class,'addBook'])->name('add.book');
    Route::post('save-book',[DashboardController::class,'saveBook'])->name('save.book');
    Route::get('show-book/{bookId}',[DashboardController::class,'show'])->name('show.book');
    Route::get('edit-book/{bookId}',[DashboardController::class,'edit'])->name('edit.book');
    Route::put('update-book/{bookId}',[DashboardController::class,'update'])->name('update.book');
    Route::delete('delete-book/{bookId}',[DashboardController::class,'destroy'])->name('delete.book');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
