# laravel-oauthio

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel 5 wrapper for oauth.io

## Install

Via Composer

``` bash
$ composer require https://github.com/ilkovich/laravel-oauthio
```

## Usage

First, add `Ilkovich\OAuthIO\OAuthIOServiceProvider` to the providers collection in `config/app.php` 
and optionally, `'OAuthIO' => 'Ilkovich\OAuthIO\Facades\OAuthIO'` to the alias collection.

``` php
$oauth = App::make('ilkovich.oauthio');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [Daniel Ilkovich][http://github.com/ilkovich]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/league/laravel-oauthio.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/laravel-oauthio/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thephpleague/laravel-oauthio.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thephpleague/laravel-oauthio.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/laravel-oauthio.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/league/laravel-oauthio
[link-travis]: https://travis-ci.org/thephpleague/laravel-oauthio
[link-scrutinizer]: https://scrutinizer-ci.com/g/thephpleague/laravel-oauthio/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/thephpleague/laravel-oauthio
[link-downloads]: https://packagist.org/packages/league/laravel-oauthio
[link-author]: https://github.com/ilkovich
[link-contributors]: ../../contributors
