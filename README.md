# This is my package test-fil-test

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webplusm/test-fil-test.svg?style=flat-square)](https://packagist.org/packages/webplusm/test-fil-test)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/webplusm/test-fil-test/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/webplusm/test-fil-test/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/webplusm/test-fil-test/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/webplusm/test-fil-test/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/webplusm/test-fil-test.svg?style=flat-square)](https://packagist.org/packages/webplusm/test-fil-test)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require webplusm/test-fil-test
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="test-fil-test-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="test-fil-test-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="test-fil-test-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$testFilTest = new Webplusm\TestFilTest();
echo $testFilTest->echoPhrase('Hello, Webplusm!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [webplusm](https://github.com/webplusm)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
