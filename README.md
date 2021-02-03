# Portal Code Style
> Bring your coding style in line with the Bristol SU Portal Guidelines

## Installation

Pull in this project
```shell
composer require bristol-su/portal-code-style
```

Create a .php_cs.dist file in your project. You can find an example in [`./vendor/bristol-su/portal-code-style/examples/.php-cs.dist.example`](examples/.php-cs.dist.example)

Create a rector.php file in your project. You can find an example in [`./vendor/bristol-su/portal-code-style/examples/rector.php`](examples/rector.php)


Add the following to your composer scripts

```
    ./vendor/bin/php-cs-fixer fix --config .php-cs
    ./vendor/bin/rector process src 
```

// Test this fixes. If it does, check out branch and fix whole of portal-v4
// Add to composer scripts and add to pipeline