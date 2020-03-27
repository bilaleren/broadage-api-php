# Broadage Sports API's
Broadage Sports provides comprehensive sports data API solutions for your projects. [Read Full Docs.](https://www.broadage.com/developers/documentation/index)

## Prerequisites

PHP >= 7.1

## Installation

```
composer require bilaleren/broadage-api
```

## Usage

```php
use BroadAgeApi\BroadAgeApi;

BroadAgeApi::init([
    'baseURL' => 'https://broadage-base-url.com',
    'subscriptionKey' => '###-####-#####-#####',
    'languageId' => 1, // default 2 (English)
    'accept' => 'application/xml', // default application/json
    'requestOptions' => [ // optional
        'timeout' => 6.0,
        'headers' => []
    ]
]);
```

## Global API

- [Global API (Sports, Country, Round and Status List)](./src/GLOBAL.md)

## Sports

- [Soccer](./src/Sport/Soccer/SOCCER.md)
- [Basketball](./src/Sport/Basketball/BASKETBALL.md)
- [Football](./src/Sport/Football/FOOTBALL.md)
- [Baseball](./src/Sport/Baseball/BASEBALL.md)
- [Ice Hockey](./src/Sport/IceHockey/ICEHOCKEY.md)
- [Volleyball](./src/Sport/Volleyball/VOLLEYBALL.md)
- [Handball](./src/Sport/Handball/HANDBALL.md)