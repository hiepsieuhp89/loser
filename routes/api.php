<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/countdown/all', [App\Http\Controllers\Api\CountDownController::class, 'index'])->name('data.countdown.all');

Route::middleware('guest')->get('/1/add', [App\Http\Controllers\IndexController::class, 'RNGC'])->name('nb.add');
