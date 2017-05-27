# Iati

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


IATI Flight API Wrapper Library for Laravel 5.4

## Structure

```
src/
src/config
src/Http
src/resources
src/resources/lang
src/resources/views

```


## Install

Via Composer

``` bash
$ composer require SiyahKare/Iati
```

## Usage

``` php
$Iati = new SiyahKare\Iati();
echo $Iati->echoPhrase('Hello, World!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email siyah@siyahkare.com instead of using the issue tracker.

## Credits

- [SiyahKare][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/SiyahKare/Iati.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/SiyahKare/Iati/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/SiyahKare/Iati.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/SiyahKare/Iati.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/SiyahKare/Iati.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/SiyahKare/Iati
[link-travis]: https://travis-ci.org/SiyahKare/Iati
[link-scrutinizer]: https://scrutinizer-ci.com/g/SiyahKare/Iati/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/SiyahKare/Iati
[link-downloads]: https://packagist.org/packages/SiyahKare/Iati
[link-author]: https://github.com/siyahkare
[link-contributors]: ../../contributors
