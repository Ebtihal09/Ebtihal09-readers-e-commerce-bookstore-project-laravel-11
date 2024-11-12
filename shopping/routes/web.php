<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\shoppingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[dashboardController::class,'index']);
Route::get('/products',[dashboardController::class,'products'])->name('products');
Route::get('/add',[dashboardController::class,'create_products'])->name('add');
Route::get('/display',[dashboardController::class,'display_products'])->name('display');
Route::get('/delete',[dashboardController::class,'delete'])->name('delete');
Route::get('edit/{id}',[dashboardController::class,'edit'])->name('edit');
Route::get('update',[dashboardController::class,'update'])->name('update');
// Route::get('/editx',[dashboardController::class,'editx']);
Route::get('/details',[dashboardController::class,'Products_details'])->name('details');
Route::post('/add_details',[dashboardController::class,'add_product_details'])->name('adddetails');
Route::get('/deletedetails',[dashboardController::class,'delete_product_details'])->name('deletedetails');
Route::get('edit_details/{id}',[dashboardController::class,'edit_details'])->name('edit_details');
Route::get('update_details',[dashboardController::class,'update_details'])->name('updatedetails');

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
Route::get('/cart_details',[shoppingController::class,'cart_details'])->name('cart_details');
Route::get('/delete_item',[shoppingController::class,'delete_item'])->name('delete_item');
Route::get('/order',[shoppingController::class,'order'])->name('order');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
