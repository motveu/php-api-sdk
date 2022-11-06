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

$smsConnector = new \Motv\Connector\Sms\AdminConnector('https://sms.operator.tv', 'Username', 'secret...');

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

$mwAdminConnector = new \Motv\Connector\Mw\AdminConnector('https://mw.operator.tv', 'Username', 'secret');

// get customer with internal ID 1
$customerEntity = $mwAdminConnector->Customer()->getData(1);
$vendorsPairs = $mwAdminConnector->Vendor()->getPairs();
echo 'Login: ' . $customerEntity->customers_login;
echo PHP_EOL;
echo 'Vendor: ' . $vendorsPairs[$customerEntity->customers_vendors_id];
```

Works with entities, update, getData and selection
---------------


```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$mwAdminConnector = new \Motv\Connector\Mw\AdminConnector('https://mw.operator.tv', 'Username', 'secret');

// It creates input entity and fills it with data
$personInputEntity = new \Motv\Connector\Mw\InputEntities\Mw\PersonEntity();
$personInputEntity->persons_type = \Motv\Connector\Mw\Enums\Mw\PersonEnum::ACTOR;
$personInputEntity->persons_birthday = '1990-01-01';
// in case of date, both string and DateTime objects are accept
$personInputEntity->persons_birthday = (new \DateTimeImmutable)->setTimestamp(strtotime('now'));
$personInputEntity->persons_description = 'Popular actor';
$personInputEntity->persons_name = 'John Smith';

// Creates new Person
$personsId = $mwAdminConnector->Person()->update(null, $personInputEntity);

// Gets the new person we just created
$personEntity = $mwAdminConnector->Person()->getData($personsId);
echo 'Actor ' . $personEntity->persons_name . ' with ID: ' . $personEntity->persons_id;
echo PHP_EOL;

// Let's change name of the Person
$personInputEntity->persons_name = 'Will Smith';

// Updates the name
$mwAdminConnector->Person()->update($personsId, $personInputEntity);

// Let's double-check that the changes were actually reflected
$personEntity = $mwAdminConnector->Person()->getData($personsId);
echo 'Actor ' . $personEntity->persons_name . ' with ID: ' . $personEntity->persons_id;
echo PHP_EOL;

// Select the person by selection function
$selectedActorEntity = $mwAdminConnector->Person()->selection(['persons_name' => 'Will Smith'])['rows'][0];
echo 'Actor ' . $selectedActorEntity->persons_name . ' with ID: ' . $selectedActorEntity->persons_id;
echo PHP_EOL;

// sending invalid data will result into a neat error, for example
$personInputEntity = new \Motv\Connector\Mw\InputEntities\Mw\PersonEntity();
$personInputEntity->persons_name = '';
$personInputEntity->persons_type = \Motv\Connector\Mw\Enums\Mw\PersonEnum::ACTOR;
$personInputEntity->persons_birthday = '1990-01-01';
$personInputEntity->persons_description = 'Popular actor';

// Will not create a new person because name is empty, will throw an exception instead
$personsId = $mwAdminConnector->Person()->update(null, $personInputEntity);
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
$mwAdminConnector = new \Motv\Connector\Mw\AdminConnector('https://mw.operator.tv', 'Username', 'secret');

$logger = new \Monolog\Logger('API');
$logger->pushHandler(new \Monolog\Handler\RotatingFileHandler('api.log', 14));
$logger->pushHandler(new \Monolog\Handler\StreamHandler('php://stdout'));

$mwconnector->setLogger($logger);
```

Pro TIP
-------

Use modern IDE such as PHP Storm. It will give you hints what are the method names as well as what are the parameter names and their types.
