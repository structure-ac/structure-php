<div align="center">
    <picture>
        <source srcset="https://user-images.githubusercontent.com/6267663/229523981-b357a689-adc6-4905-ac0e-e432aee5800b.png" media="(prefers-color-scheme: dark)">
        <img src="https://user-images.githubusercontent.com/6267663/229523981-b357a689-adc6-4905-ac0e-e432aee5800b.png">
    </picture>
    <h1>PHP SDK</h1>
   <p>Discover rich information on people and companies</p>
   <a href="https://docs.structure.ac/"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=2564ec&style=for-the-badge" /></a>
   <a href="https://github.com/structure-ac/structure-php/actions"><img src="https://img.shields.io/github/actions/workflow/status/structure-ac/structure-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" /></a>
  <a href="https://github.com/structure-ac/structure-php/releases"><img src="https://img.shields.io/github/v/release/structure-ac/structure-php?sort=semver&style=for-the-badge" /></a>
</div>

<!-- Start SDK Installation -->
## SDK Installation

### Composer

```bash
composer require "structure/structure"
```
<!-- End SDK Installation -->

## Authentication
You'll need to authenticate your requests to access any of the endpoints in the Structure API. In this guide, we'll look at how authentication works. Structure offers authentication for your API requests with a token.

### OAuth2 with bearer token
Authentication with the Structure API is using OAuth2. When establishing a connection using OAuth2, you will need your access token — you will find it in the [Structure dashboard](https://www.structure.ac/api_tokens) under API settings.

## SDK Example Usage
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
``````php
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
    $request->countryCode = 'MA';
    $request->headquarters = 'provident';
    $request->id = 'bd9d8d69-a674-4e0f-867c-c8796ed151a0';
    $request->name = 'Estelle Will';

    $response = $sdk->companies->enrich($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
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
    $request->countryCode = 'MA';
    $request->headquarters = 'provident';
    $request->id = 'bd9d8d69-a674-4e0f-867c-c8796ed151a0';
    $request->name = 'Estelle Will';

    $response = $sdk->companies->enrich($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
``````php
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
    $request->countryCode = 'MA';
    $request->headquarters = 'provident';
    $request->id = 'bd9d8d69-a674-4e0f-867c-c8796ed151a0';
    $request->name = 'Estelle Will';

    $response = $sdk->companies->enrich($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```<!-- Start SDK Example Usage -->

<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## SDK Available Operations


### accounts

* `listUsers` - Show current user accounts

### companies

* `enrich` - Enrich a company profile
* `listEmployees` - List company employees
* `listJobs` - List company jobs
* `search` - Search Companies

### people

* `enrich` - Enrich a person profile
* `search` - Search People

### user

* `login` - Login user
* `me` - Show current user
<!-- End SDK Available Operations -->

### SDK Generated by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
