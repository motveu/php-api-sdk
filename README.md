# motTV.eu by IXCSoft

Pacote adaptado para funcionamento no PHP >= 7.0

## Code Quality

Para verificar compatibilidade de código com o PHP >= 7.0

`./vendor/bin/phpcs -p . --standard=vendor/phpcompatibility/php-compatibility/PHPCompatibility --runtime-set testVersion 7.0 src/ --extensions=php --ignore=*/vendor/*`

Para analisar a qualidade código com Code Sniffer

`php ./vendor/bin/phpcs --extensions=php --standard=rules-cs.xml src/`

Para analisar e corrigir automaticamente com Code Sniffer

`php ./vendor/bin/phpcbf --extensions=php --standard=rules-cs.xml src/`

moTV.eu / JACON PHP SDK
===================

This SDK can be used to integrate with moTV.eu (https://motv.eu) and JACON CSMS (https://jacon.cz).

Installation
------------

The recommended way to install is via Composer:

```
composer require motveu/php-api-sdk
```

Usage
-----

Usage is very easy. Just include the composer's autoloader and start using it.


Sample SMS commands
-------------------

For full API documentation and test API endpoint please get in touch with JACON (or moTV.eu in case it was bundled with moTV.eu middleware).

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$smsConnector = new \Motv\Sms\Connector('https://sms.operator.tv', 'Username', 'secret...');

// create sample customer
$viewersId = $smsConnector->Integration()->createMotvCustomer('test', 'myPassword');

// check whether there are any allowed products for the created customer
$allowedProducts = $smsConnector->Sales()->getAllowedProductsForCustomer($viewersId);

if (count($allowedProducts) === 0) {
	echo "No allowed products found!";
	
	exit(1);
}

// in a real world, it will not be the first product but rather whatever the customer chooses on the selfcare website for example
$products_id = array_pop($allowedProducts)['products_id'];

// subscribe to first product
$smsConnector->Integration()->subscribe($viewersId, $products_id);

// and now let's cancel the subscription
$smsConnector->Integration()->cancel($viewersId, $products_id);

// get all subscription info
$smsConnector->Subscription()->getCustomerSubscriptionInfo($viewersId);

// retrieve all data that are saved about the customer (personal data, contacts, addresses, devices)
$fullCustomerData = $smsConnector->Customer()->getData($viewersId);

// get the moTV.eu device number, this number can be used when querying the MW API
$motvDeviceId = $fullCustomerData['devices'][0]['device_motv_motv_id'];

// clean up after our tests
$smsConnector->Customer()->deleteCustomer($viewersId);
```

Sample Middleware commands
--------------------------

For full API documentation and test API endpoint please get in touch with moTV.eu.

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$mwAdminConnector = new \Motv\Mw\AdminConnector('https://mw.operator.tv', 'Username', 'secret');

// get customer with internal ID 1
$mwAdminConnector->Customer()->getData(1);
```

Catching errors
---------------

There might be exceptions thrown in case of unexpected issues, for example that the customer does not exists. There is also `UnknownApiException` thrown in case when something unpredictable happened. And standard Guzzle (https://github.com/guzzle/guzzle) exceptions are thrown when issue with connection happens.

```php
try { 
	$fullCustomerData = $mwAdminConnector->Customer()->getData($customersId);
} catch (\Motv\Mw\CustomerUnknownException $e) {
	echo "The customer does not exist!";	
} catch (\Motv\Mw\UnknownApiException $e) {
	echo "Something went really wrong!"
} catch (\GuzzleHttp\Exception\TransferException $e) {
	echo "Some connection issues!";
}
```

Logging
-------

This SDK is shipped with Monolog (https://github.com/Seldaek/monolog) support. You can pass logger to the `$connector->setLogger()` method and all API communication will be logged

```php
$mwAdminConnector = new \Motv\Mw\AdminConnector('https://mw.operator.tv', 'Username', 'secret');

$logger = new \Monolog\Logger('API');
$logger->pushHandler(new \Monolog\Handler\RotatingFileHandler('api.log', 14));
$logger->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout'));

$mwconnector->setLogger($logger);
```

Pro TIP
-------

Use modern IDE such as PHP Storm. It will give you hints what are the method names as well as what are the parameter names and their types.
