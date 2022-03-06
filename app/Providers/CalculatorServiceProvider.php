<?php

namespace App\Providers;

use App\Services\Calculator;
use App\Services\Operations\Add;
use App\Services\Operations\Sub;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            Calculator::class,
            fn(Application $app) => new Calculator(
                $app->get(Add::class),
                $app->get(Sub::class),
            )
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
