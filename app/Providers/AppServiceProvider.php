<?php

namespace App\Providers;

use App\Http\Controllers\BanniereController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('App\Http\Controllers\BanniereController', function ($app) {
            return new BanniereController();
        });

        view()->composer('*', function ($view) {
            $banniereController = app('App\Http\Controllers\BanniereController');
            $my_banniere = $banniereController->show();
            $view->with('my_banniere', $my_banniere);
        });
    }
}
