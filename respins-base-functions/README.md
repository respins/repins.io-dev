## Installation

You can install the package via composer:

```bash
composer require respins-io/respins-base-functions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="respins-base-functions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="respins-base-functions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="respins-base-functions-views"
```

## Usage

```php
$respinsBaseFunctions = new ase\RespinsBaseFunctions();
echo $respinsBaseFunctions->echoPhrase('Hello, ase!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/respins.io/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Respins.io](https://github.com/respins.io)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
