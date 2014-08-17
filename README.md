Tweecool-api
============

## With Composer

```php

require_once __DIR__ . '/vendor/autoload.php';

use Tweecool\Tweecool;

$tweecool = Tweecool::get('tweecool', 3);

foreach($tweecool->tweets as $tweet){
    echo $tweet->text; 
}

```

## Without Composer

```php

require_once '/PATH/TO/Tweecool.php';

use Tweecool\Tweecool;

$tweecool = Tweecool::get('tweecool', 3);

foreach($tweecool->tweets as $tweet){
    echo $tweet->text;
}

```