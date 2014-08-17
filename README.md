Tweecool-api
============

## With Composer

add the following in the `composer.json` :

```json

{   
    "require": {
        "tweecool/tweecool": "1.0.0"
    }
}

```
and then in your PHP file:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Tweecool\Tweecool;

$tweecool = Tweecool::get('tweecool', 3);

foreach($tweecool->tweets as $tweet){
    echo $tweet->text; 
}

```

## Without Composer

```php
<?php
require_once '/PATH/TO/Tweecool.php';

use Tweecool\Tweecool;

$tweecool = Tweecool::get('tweecool', 3);

foreach($tweecool->tweets as $tweet){
    echo $tweet->text;
}

```