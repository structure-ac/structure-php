# user

## Overview

User

### Available Operations

* [login](#login) - Login user
* [me](#me) - Show current user

## login

Login user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\LoginApplicationJSON;

$sdk = SDK::builder()
    ->build();

try {
    $request = new LoginApplicationJSON();
    $request->email = 'Kenny50@yahoo.com';
    $request->password = 'rem';

    $response = $sdk->user->login($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\structure\Structure\Models\Operations\LoginApplicationJSON](../../models/operations/LoginApplicationJSON.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\structure\Structure\Models\Operations\LoginResponse](../../models/operations/LoginResponse.md)**


## me

Show current user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->user->me();

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\structure\Structure\Models\Operations\MeResponse](../../models/operations/MeResponse.md)**

