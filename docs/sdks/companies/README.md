# companies

## Overview

Companies

### Available Operations

* [enrich](#enrich) - Enrich a company profile
* [listEmployees](#listemployees) - List company employees
* [listJobs](#listjobs) - List company jobs
* [search](#search) - Search Companies

## enrich

Enrich a company profile

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\EnrichCompanyRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new EnrichCompanyRequest();
    $request->id = 'a05dfc2d-df7c-4c78-8a1b-a928fc816742';

    $response = $sdk->companies->enrich($request);

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
| `$request`                                                                                                     | [\structure\Structure\Models\Operations\EnrichCompanyRequest](../../models/operations/EnrichCompanyRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\structure\Structure\Models\Operations\EnrichCompanyResponse](../../models/operations/EnrichCompanyResponse.md)**


## listEmployees

List company employees

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\ListEmployeesRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListEmployeesRequest();
    $request->id = 'cb739205-9293-496f-aa75-96eb10faaa23';
    $request->offset = 'corporis';
    $request->perPage = 'explicabo';

    $response = $sdk->companies->listEmployees($request);

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
| `$request`                                                                                                     | [\structure\Structure\Models\Operations\ListEmployeesRequest](../../models/operations/ListEmployeesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\structure\Structure\Models\Operations\ListEmployeesResponse](../../models/operations/ListEmployeesResponse.md)**


## listJobs

List company jobs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\ListJobsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new ListJobsRequest();
    $request->id = 'c5955907-aff1-4a3a-afa9-467739251aa5';
    $request->offset = 'odit';
    $request->perPage = 'quo';

    $response = $sdk->companies->listJobs($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\structure\Structure\Models\Operations\ListJobsRequest](../../models/operations/ListJobsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\structure\Structure\Models\Operations\ListJobsResponse](../../models/operations/ListJobsResponse.md)**


## search

Search Companies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \structure\Structure\SDK;
use \structure\Structure\Models\Shared\Security;
use \structure\Structure\Models\Operations\SearchCompaniesApplicationJSON;

$sdk = SDK::builder()
    ->build();

try {
    $request = new SearchCompaniesApplicationJSON();
    $request->filter = 'sequi';
    $request->limit = 'tenetur';
    $request->page = 'ipsam';
    $request->query = 'id';

    $response = $sdk->companies->search($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\structure\Structure\Models\Operations\SearchCompaniesApplicationJSON](../../models/operations/SearchCompaniesApplicationJSON.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |


### Response

**[?\structure\Structure\Models\Operations\SearchCompaniesResponse](../../models/operations/SearchCompaniesResponse.md)**

