<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public $serviceBindings = [
        'App\Services\Interfaces\UserServiceInterface' =>
        'App\Services\UserService',
        'App\Reponsitories\Interfaces\UserReponsitoryInterface'=>
        'App\Reponsitories\UserReponsitory'
    ];

    public function register(): void
    {
        foreach ($this->serviceBindings as $key => $val) {
            $this->app->bind($key, $val);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
