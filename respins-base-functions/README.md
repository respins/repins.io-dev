
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Respins.io base functions
 "repositories": [
    {
        "type": "path",
        "url": "../respins/base-functions"
    }
    ],

"respins/base-functions": "*"

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/base-functions.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/base-functions)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require respins/base-functions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="base-functions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="base-functions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="base-functions-views"
```

## Usage

```php
$baseFunctions = new Respins\BaseFunctions();
echo $baseFunctions->echoPhrase('Hello, Respins!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/respins/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Respins.io](https://github.com/respins)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
