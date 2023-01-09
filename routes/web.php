<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;

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

// Testing another commit


// Route::get('/', function () {
//     return view('auth/login');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'home'] );
Route::get('/category', [CategoryController::class, 'category'] );
Route::get('/detail', [ProductController::class, 'pDetails'] );
Route::get('/search', [SearchController::class, 'search'] );
Route::get('/manage', [ManageController::class, 'manage'] );
Route::get('/manage/add', [ManageController::class, 'add'] );
Route::get('/manage/update', [ManageController::class, 'update'] );
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/history', [HistoryController::class, 'history']);
