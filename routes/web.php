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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
//Route::get('/craw',[App\Http\Controllers\CrawController::class,'craw']);

Route::post('/user/update', [App\Http\Controllers\IndexController::class, 'UU'])->name('data.user.up');
Route::post('/setting/update', [App\Http\Controllers\IndexController::class, 'SU'])->name('data.set.up');
Route::post('/todo/update', [App\Http\Controllers\IndexController::class, 'TDU'])->name('data.todo.up');
Route::post('/doc/post', [App\Http\Controllers\IndexController::class, 'PDP'])->name('data.post.po');

Route::post('/message/send', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('message.send');
