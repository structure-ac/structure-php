# accounts

## Overview

Accounts

### Available Operations

* [listUsers](#listusers) - Show current user accounts

## listUsers

Show current user accounts

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
    $response = $sdk->accounts->listUsers();

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\structure\Structure\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**

