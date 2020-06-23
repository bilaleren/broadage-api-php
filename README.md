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
use BroadAgeApi\Util\Accepts;
use BroadAgeApi\Util\Languages;

BroadAgeApi::init([
    'baseURL' => 'https://broadage-base-url.com',
    'subscriptionKey' => '###-####-#####-#####',
    'languageId' => Languages::TURKISH, // default Languages::ENGLISH
    'accept' => Accepts::XML, // default Accepts::JSON
    'requestOptions' => [ // optional
        'timeout' => 6.0,
        'headers' => []
    ]
]);
```

## Functions
```php
use function BroadAgeApi\{
    init,
    soccer,
    basketball,
    football,
    baseball,
    iceHockey,
    volleyball,
    handball,
    globalData
};
```

## Global API

- [Global API (Sports, Country, Round and Status List)](./src/README.md)

## Sports

- [Soccer](./src/Sport/Soccer/README.md)
- [Basketball](./src/Sport/Basketball/README.md)
- [Football](./src/Sport/Football/README.md)
- [Baseball](./src/Sport/Baseball/README.md)
- [Ice Hockey](./src/Sport/IceHockey/README.md)
- [Volleyball](./src/Sport/Volleyball/README.md)
- [Handball](./src/Sport/Handball/README.md)

## Utils

- [Config](./src/Util/README.md#config)
- [Languages](./src/Util/README.md#languages)
- [Accepts](./src/Util/README.md#accepts)