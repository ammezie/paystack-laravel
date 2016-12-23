# Paystack Laravel

[![Build Status](https://travis-ci.org/ammezie/paystack-laravel.svg?branch=master)](https://travis-ci.org/ammezie/paystack-laravel)
[![Packagist](https://img.shields.io/packagist/dt/ammezie/paystack-laravel.svg?style=flat-square)](https://packagist.org/packages/ammezie/paystack-laravel)

This is a Laravel 5 wrapper for [MalikAbiola Paystack Lib](https://github.com/MalikAbiola/paystack-php-lib).

## Requirements

 - PHP 5.6+
 - [Composer](https://getcomposer.org/doc/00-intro.md "Composer")

## Installation

Add the following to your `composer.json` file

    "mabiola/paystack-php-lib" : "~1.0"
    "ammezie/paystack-laravel" : "1.0.*"

and run `composer install` or `composer update`.

Then add `Ammezie\Paystack\PaystackServiceProvider` to the `providers` array in your `config/app.php`:

    Ammezie\Paystack\PaystackServiceProvider::class

Also, register the Facade like so:

    'aliases' => [
        ...
        'Paystack' => Ammezie\Paystack\Facades\Paystack::class,
        ...
    ]

## Configuration

You can publish the configuration file using this command:

    php artisan vendor:publish --provider="Ammezie\Paystack\PaystackServiceProvider"

A configuration file named `paystack.php` will be placed in your config directory.

Then set Paystack mode and the corresponding API Keys.

## Usage

You can use the facade:

    Paystack::startOneTimeTransaction('10000', 'me@example.com');

For more information on using this package, see [https://github.com/MalikAbiola/paystack-php-lib](https://github.com/MalikAbiola/paystack-php-lib) repository.
