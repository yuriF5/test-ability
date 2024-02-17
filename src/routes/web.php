<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
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
//お問い合わせフォームcontactsテーブル用ContactController
//お問い合わせフォームを表示
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);

//お問い合わせフォームcategorisテーブル用CategoryController
Route::post('/confirm', [CategoryController::class, 'store']);

//ログイン認証用AuthController
Route::get('/admin', [AuthController::class, 'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);});
Route::get('/register', [AuthController::class, 'index']);

//検索機能
//Route::get('/admin', [AuthorController::class, 'find']);
//Route::post('/admin', [AuthorController::class, 'search']);
