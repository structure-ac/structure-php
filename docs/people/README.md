# people

## Overview

People

### Available Operations

* [enrich](#enrich) - Enrich a person profile
* [search](#search) - Search People

## enrich

Enrich a person profile

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\EnrichPersonRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new EnrichPersonRequest();
    $request->id = 'd019da1f-fe78-4f09-bb00-74f15471b5e6';

    $response = $sdk->people->enrich($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## search

Search People

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\SearchPeopleApplicationJSON;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchPeopleApplicationJSON();
    $request->filter = 'repudiandae';
    $request->limit = 'quae';
    $request->page = 'ipsum';
    $request->query = 'quidem';

    $response = $sdk->people->search($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
