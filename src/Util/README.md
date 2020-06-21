### Config

```php
use BroadAgeApi\Util\Config;
use BroadAgeApi\Util\Accepts;
use BroadAgeApi\Util\Languages;

/*
 * Set global language id
 */
Config::setLanguageId(Languages::ENGLISH);
echo Config::get('languageId'); // or Config::getLanguageId()

/*
 * Set global accept
 */
Config::set('accept', Accepts::JSON);
echo Config::getAccept(); // or Config::get('accept')
```

### Languages

Language is required to use the Broadage API. You can access your unique IDs as follows.

```php
use BroadAgeApi\BroadAgeApi;
use BroadAgeApi\Util\Languages;

Languages::TURKISH;
Languages::ENGLISH;
Languages::GERMAN;
Languages::SPANISH;
Languages::FRENCH;
Languages::ITALIAN;
Languages::ARABIC;
Languages::PORTUGUESE;

// Example
BroadAgeApi::init([
   'languageId' => Languages::TURKISH
]);
```

### Accepts

Boradge API provides two different output support. You can access the output types as follows.

```php
use BroadAgeApi\BroadAgeApi;
use BroadAgeApi\Util\Accepts;

Accepts::JSON;
Accepts::XML;

// Example
BroadAgeApi::init([
   'accept' => Accepts::XML
]);
```