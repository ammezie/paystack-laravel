<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Paystack API Keys
    |--------------------------------------------------------------------------
    |
    | These keys can be found on the Developer/API panel of your settings page. 
    |
    */

	'paystack_mode' => env('PAYSTACK_MODE', 'test'),

	'public_key' => env('PAYSTACK_PUBLIC_KEY', ''),

    'secret_key' => env('PAYSTACK_SECRET_KEY', ''),

    'payment_url' => env('PAYSTACK_PAYMENT_URL', ''),

];