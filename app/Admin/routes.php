<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('documents', DocumentController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('statistics', StatisticController::class);
    $router->resource('count-downs', CountDownController::class);
});
