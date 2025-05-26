# Translation Scanner is a Laravel package designed to facilitate the management of translation files. It scans all the PHP files in your project and automatically generates translation files for the languages you specify. The package supports multiple languages, manages nested translation keys and allows you to clean up unused keys.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephanekuma/translation-scanner.svg?style=flat-square)](https://packagist.org/packages/stephanekuma/translation-scanner)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/stephanekuma/translation-scanner/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/stephanekuma/translation-scanner/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/stephanekuma/translation-scanner/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/stephanekuma/translation-scanner/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/stephanekuma/translation-scanner.svg?style=flat-square)](https://packagist.org/packages/stephanekuma/translation-scanner)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/translation-scanner.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/translation-scanner)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require stephanekuma/translation-scanner
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="translation-scanner-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="translation-scanner-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="translation-scanner-views"
```

## Usage

```php
$scanTranslations = new Stekos\ScanTranslations();
echo $scanTranslations->echoPhrase('Hello, Stekos!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Stéphane Kuma](https://github.com/stephanekuma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
