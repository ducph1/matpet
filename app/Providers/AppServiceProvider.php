<?php

namespace App\Providers;
use App\Product;

use Illuminate\Support\ServiceProvider;

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
        //
        view()->composer('*', function($view){
            $min_price= Product::min('price');
            $max_price= Product::max('price');
            $view->with('min_price', $min_price)->with('max_price', $max_price);
        });
    }
}
