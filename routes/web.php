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
    Route::get('/user_role', [App\Http\Controllers\RoleController::class, 'index'])->name('user_role.index');
    Route::get('/user_role/{user_id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('user_role.edit');
    Route::post('/user_role/{user_id}', [App\Http\Controllers\RoleController::class, 'update'])->name('user_role.update');
});

// ファイル/コメント投稿
Route::post('/attached_file', [App\Http\Controllers\PostController::class, 'store'])->name('attached_file.store');
