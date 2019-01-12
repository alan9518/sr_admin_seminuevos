<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Fix DB Legth Error
use Illuminate\Support\Facades\Schema; //Import Schema


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Solved by increasing StringLength
        Schema::defaultStringLength(191); 

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
