BNI eCollection Callback
========================
An extension to get BNI eCollection Callback API

Requirements
------------

PHP 5.4.0 and Yii2 ~2.0.5.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist bni-ecollection/ecoll-callback "*"
```

or add

```
"bni-ecollection/ecoll-callback": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply include the Callback class  :

```php
use ecoll\callback\Callback;
```

then use it in your code like  :

```php
$call = new Callback();
$sk = "clientSecretKey";
$raw_data = 'raw php://input data';
$BniHashingClass = "\app\components\BniHashing";

$parsed_data = $call->parseData($BniHashingClass, $raw_data, $sk);

print_r($parsed_data);
```