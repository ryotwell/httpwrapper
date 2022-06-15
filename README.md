## Guzzle Httpwrapper
Httpwrapper is a PHP HTTP client library.

### Installation
```bash
composer require ryodevz/httpwrapper
```

### GET Request
```php
<?php

use Ryodevz\Httpwrapper\Http;

$response = Http::get('https://example.com', ['user_id' => 1, 'category_id' => 1])
    ->send()  // Send Request
    ->body(); // Get Response
```

### POST Request
```php
<?php

use Ryodevz\Httpwrapper\Http;

$response = Http::post('https://example.com', $data)
    ->send()  // Send Request
    ->body(); // Get Response
```

### PUT Request
```php
<?php

use Ryodevz\Httpwrapper\Http;

$response = Http::put('https://example.com', $data)
    ->send()  // Send Request
    ->body(); // Get Response
```

### PATCH Request
```php
<?php

use Ryodevz\Httpwrapper\Http;

$response = Http::patch('https://example.com', $data)
    ->send()  // Send Request
    ->body(); // Get Response
```

### DELETE Request
```php
<?php

use Ryodevz\Httpwrapper\Http;

$response = Http::delete('https://example.com', $data)
    ->send()  // Send Request
    ->body(); // Get Response
```

### With Headers
```php
<?php

use Ryodevz\Httpwrapper\Http;

$headers = [
    'Content-Type' => 'application/json'
    'Accept' => 'application/json'
];

Http::withHeaders($headers)->post('https://example.com', $data)
```