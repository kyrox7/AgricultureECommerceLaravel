<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;



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

Route::get('/home',[MenuController::class, 'home'])->name('home');
Route::get('/insecticides',[MenuController::class, 'insecticides'])->name('insecticides');
Route::get('/pesticides',[MenuController::class, 'pesticides']);
Route::get('/seeds',[MenuController::class, 'seeds']);
Route::get('/forum',[MenuController::class, 'forum'])->name('forum');
Route::get('/aboutus',[MenuController::class, 'aboutus']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/customerlogin', [LoginController::class, 'index'])->name('login');
Route::post('/customerlogin', [LoginController::class, 'store']);


Route::get('/adminDashboard',[MenuController::class,'adminDashboard'])->name('adminDashboard');
Route::get('/adminOrderView',[MenuController::class,'adminOrder']);

Route::resource('products',ProductsController::class);

Route::get('/add-to-cart/{id}', [
    'uses' =>'App\Http\Controllers\CartController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' =>'App\Http\Controllers\CartController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' =>'App\Http\Controllers\CartController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' =>'App\Http\Controllers\CartController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/order', [OrderController::class, 'index'])->name('order')->middleware('auth');
Route::get('/myorder/{id}', [OrderController::class, 'myOrder'])->middleware('auth');

// Route::post('/order', [OrderController::class, 'store']);

Route::get('/forum/create', [QuestionController::class, 'create']);
Route::post('/forum/create', [QuestionController::class, 'store'])->middleware('auth');

Route::get('/answer/{id}', [AnswerController::class, 'index']);
Route::post('/answer', [AnswerController::class, 'store']);
Route::post('/answer', [AnswerController::class, 'store'])->middleware('auth');
// Route::get('/giveanswer/{id}', [AnswerController::class, 'give']);
// Route::post('/giveanswer', [AnswerController::class, 'store']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);




