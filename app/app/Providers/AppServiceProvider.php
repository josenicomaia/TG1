<?php

namespace App\Providers;

use App\Charts\GroupChart;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use NumberFormatter;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        if ($this->app->isLocal()) {
            // Laravel Telescope
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);

            // Laravel Debug Bar
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }

        $this->app->singleton(NumberFormatter::class, function () {
            return new NumberFormatter($this->app->getLocale(), NumberFormatter::CURRENCY);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts) {
        Schema::defaultStringLength(191);

        $charts->register([
            GroupChart::class
        ]);
    }
}
