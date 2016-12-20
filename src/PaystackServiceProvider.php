<?php

namespace Ammezie\Paystack;

use Illuminate\Support\ServiceProvider;
use MAbiola\Paystack\Paystack;

class PaystackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/paystack.php' => config_path('paystack-laravel.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('paystack-laravel', function($app) {
            $config = $app['config']->get('paystack');
            
            if(!$config){
                throw new \RuntimeException('Missing Paystack configuration. Please run `php artisan vendor:publish`');
            }

            return Paystack::make($config['secret_key']);
        });

    }

     /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['paystack-laravel'];
    }
}
