# php-raiblocks

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

***WIP: Not recommended for production use***

A simple PHP RaiBlocks RPC Library.


## Install

Via Composer

``` bash
$ composer require dansup/php-raiblocks
```

## Usage

``` php
$server = new dansup\RaiBlocks\Server();
echo json_encode($server->availableSupply()->run());
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email danielsupernault@gmail.com instead of using the issue tracker.

## Credits

- [Daniel Supernault][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dansup/php-raiblocks.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dansup/php-raiblocks/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/dansup/php-raiblocks.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/dansup/php-raiblocks.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dansup/php-raiblocks.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dansup/php-raiblocks
[link-travis]: https://travis-ci.org/dansup/php-raiblocks
[link-scrutinizer]: https://scrutinizer-ci.com/g/dansup/php-raiblocks/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/dansup/php-raiblocks
[link-downloads]: https://packagist.org/packages/dansup/php-raiblocks
[link-author]: https://github.com/dansup
[link-contributors]: ../../contributors
