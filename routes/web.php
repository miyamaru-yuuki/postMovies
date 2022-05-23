<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('/index', [App\Http\Controllers\RoleController::class, 'index'])->name('index');
    Route::get('edit/{user_id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('edit');
    Route::post('/user_role/{user_id}', [App\Http\Controllers\RoleController::class, 'update']);
});

// ファイル/コメント投稿
Route::post('add', [App\Http\Controllers\PostController::class, 'add'])->name('add');
