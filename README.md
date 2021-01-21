# Portal Code Style
> Bring your coding style in line with the Bristol SU Portal Guidelines

## Installation

Pull in this project
```shell
composer require bristol-su/portal-code-style
```

Create a .php_cs.dist file in your project, and fill it with the following (modifying based on your needs)

```php
<?php

use BristolSU\CodeStyle\PhpCs\Config;
use PhpCsFixer\Finder;

$finder = Finder::create();
$finder->in(__DIR__ . '/src');
$finder->in(__DIR__ . '/tests');

$config = new Config();
$config->setFinder($finder);

return $config;

```
