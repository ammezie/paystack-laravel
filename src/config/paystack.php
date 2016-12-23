<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Paystack Mode
	|--------------------------------------------------------------------------
	|
	| Here you configure which Paystack mode.
	|
	| Available Settings: "test", "live"
	|
	*/

	'paystack_mode' => getenv('PAYSTACK_MODE', 'test'),

	/*
    |--------------------------------------------------------------------------
    | Paystack Test API Keys
    |--------------------------------------------------------------------------
    |
    | These keys can be found on the Developer/API panel of your settings page. 
    |
    */	

    'test_public_key' => getenv('PAYSTACK_TEST_PUBLIC_KEY', ''),

    'test_secret_key' => getenv('PAYSTACK_TEST_SECRET_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Paystack Live API Keys
    |--------------------------------------------------------------------------
    |
    | These keys can be found on the Developer/API panel of your settings page. 
    |
    */	

	'live_public_key' => getenv('PAYSTACK_LIVE_PUBLIC_KEY', ''),

    'live_secret_key' => getenv('PAYSTACK_LIVE_SECRET_KEY', ''),

];