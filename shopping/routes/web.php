<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shoppingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/products',[dashboardController::class,'products'])->name('products')->middleware('auth');
Route::get('/add',[dashboardController::class,'create_products'])->name('add')->middleware('auth');
Route::get('/display',[dashboardController::class,'display_products'])->name('display')->middleware('auth');
Route::get('/delete',[dashboardController::class,'delete'])->name('delete')->middleware('auth');
Route::get('edit/{id}',[dashboardController::class,'edit'])->name('edit')->middleware('auth');
Route::get('update',[dashboardController::class,'update'])->name('update')->middleware('auth');
// Route::get('/editx',[dashboardController::class,'editx']);
Route::get('/details',[dashboardController::class,'Products_details'])->name('details')->middleware('auth');
Route::post('/add_details',[dashboardController::class,'add_product_details'])->name('adddetails')->middleware('auth');
Route::get('/deletedetails',[dashboardController::class,'delete_product_details'])->name('deletedetails')->middleware('auth');
Route::get('edit_details/{id}',[dashboardController::class,'edit_details'])->name('edit_details')->middleware('auth');
Route::get('update_details',[dashboardController::class,'update_details'])->name('updatedetails')->middleware('auth');
Route::get('/orders',[dashboardController::class,'orders'])->name('orders')->middleware('auth');
Route::get('/bills',[dashboardController::class,'bills'])->name('bills')->middleware('auth');

Route::get('/b',[shoppingController::class,'basic']);


Route::get('/',[shoppingController::class,'index'])->name('landing');
Route::get('/cart/{id}',[shoppingController::class,'add_to_cart'])->name('add_to_cart')->middleware('auth');
// Route::get('/cate',[shoppingController::class,'Categories']);
Route::get('/novelsBooks',[shoppingController::class,'novelsBooks'])->name('novels');
Route::get('/childrenBooks',[shoppingController::class,'childrenBooks'])->name('children');
Route::get('/selfDevBooks',[shoppingController::class,'selfDevBooks'])->name('selfDev');
Route::get('/religiousBooks',[shoppingController::class,'religiousBooks'])->name('religious');
Route::get('/books_details/{id}',[shoppingController::class,'books_details'])->name('books_details');
Route::get('/all_books',[shoppingController::class,'all_books'])->name('all_books');
Route::get('/cart_details',[shoppingController::class,'cart_details'])->name('cart_details')->middleware('auth');
Route::get('/delete_item',[shoppingController::class,'delete_item'])->name('delete_item')->middleware('auth');
Route::get('/order',[shoppingController::class,'order'])->name('order');
Route::get('/search',[shoppingController::class,'search'])->name('search');
Route::get('/all_books_search',[shoppingController::class,'all_books_search'])->name('all_books_search');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
