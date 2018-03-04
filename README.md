## Laravel Borica Package

All kudos goes to original author https://github.com/mirovit/borica-api
Please star it! 
I only ported it for easy integration with Laravel.

### Installation
```
composer require escapeboy/borica
```
This package works with auto-discovery. For Laravel <5.5 you should register it manually:

```
//config/app.php
Borica\ServiceProvider::class,
```

Publish package config
```
php artisan vendor:publish --provider="Borica\BoricaServiceProvider"
```

## Usage
```
$borica = new \Borica\Factory();
```
### Registering of a transaction
```
$borica->request()
        ->amount('1') // 1 EUR
        ->orderID(1) // Unique identifier in your system
        ->description('testing the process') // Short description of the purchase (up to 125 chars)
        ->currency('EUR') // The currency of the payment
        ->register(); // Type of the request
```
### Check status of a transaction
```
$factory->request()
        ->amount('1') // 1 EUR
        ->orderID(1) // Unique identifier in your system
        ->description('testing the process') // Short description of the purchase (up to 125 chars)
        ->currency('EUR') // The currency of the payment
        ->status(); // Type of the request
```
### Reverse a transaction
```
$factory->request()
        ->amount('1') // 1 EUR - partial reversal (amount less than the original), full reversal the original amount
        ->orderID(1) // Unique identifier in your system
        ->reverse(); // Type of the request
```
### Parse response
```
$borica = new \Borica\Factory();
$borica = $borica->response($request->eBorica);
//Methods
$borica->transactionCode();
$borica->transactionTime();
$borica->amount();
$borica->terminalID();
$borica->orderID();
$borica->notSuccessful();
$borica->isSuccessful();
$borica->responseCode();
```