<?php

namespace Ammezie\Paystack;

use Illuminate\Support\ServiceProvider;
use MAbiola\Paystack\Paystack as MAbiolaPaystack;

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
            __DIR__.'/config/paystack.php' => config_path('paystack-laravel.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('paystack-laravel', function ($app) {
            $config = $app['config']->get('paystack');

            if (!$config) {
                throw new \RuntimeException('Missing Paystack configuration.');
            }

            if ($config['paystack_mode'] == 'test') {
                return MAbiolaPaystack::make($config['test_secret_key']);
            }

            return MAbiolaPaystack::make($config['live_secret_key']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['paystack-laravel'];
    }
}
