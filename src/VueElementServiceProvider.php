<?php

namespace Maxlab\VueElement;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class VueElementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mlve');
        $this->publishes([
            __DIR__.'/../src/resources/assets' => resource_path('/assets'),
            __DIR__.'/../package.json' => base_path('/'),
            __DIR__.'/../webpack.mix.js' => base_path('/'),
        ], 'laravel-vue-element');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
