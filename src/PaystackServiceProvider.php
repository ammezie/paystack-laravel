<?php

namespace Ammezie\Paystack;

use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dist = __DIR__.'/../config/paystack.php';
        $this->publishes([
            $dist => config_path('paystack.php'),
        ]);
        $this->mergeConfigFrom($dist, 'paystack');
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
