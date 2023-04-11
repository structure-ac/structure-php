<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);

use structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\EnrichCompanyRequest;

$security = new Security();
$security->bearerAuth = 'Bearer YOUR_BEARER_TOKEN_HERE';

$sdk = SDK::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new EnrichCompanyRequest();
    $request->countryCode = 'corrupti';
    $request->headquarters = 'provident';
    $request->id = 'distinctio';
    $request->name = 'quibusdam';

    $response = $sdk->companies->enrich($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->