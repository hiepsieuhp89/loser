<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cookie;
use Session;
use Auth;
use App\Models\Statistic;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*',function($view){
            $statistic = Statistic::first();
            $categorys = Category::all();
            $view->with([
                'statistic' => $statistic,
                'categorys' => $categorys,
            ]);
        });
    }
}
