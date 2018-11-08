# HiDev PHP

**HiDev plugin for PHP projects**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-php/v/stable)](https://packagist.org/packages/hiqdev/hidev-php)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-php/downloads)](https://packagist.org/packages/hiqdev/hidev-php)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-php.svg)](https://travis-ci.org/hiqdev/hidev-php)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hidev-php.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-php/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hidev-php.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-php/)

[HiDev] is the automation tool mixed with code generator for easier continuous development.
This plugin provides basic HiDev configuration for PHP projects.

Provides support for:

- `.gitignore`
- `LICENSE` with [hidev-license]
- `README.md` with [hidev-readme]
- `CHANGELOG.md` with [hidev-chkipper]
- `composer.json` with [hidev-composer]
- [PHP-CS-Fixer] with [hidev-php-cs-fixer]
- [PHPStan] analysis with [hidev-phpstan]
- [PHPUnit] tests with [hidev-phpunit]
- [Travis] with [hidev-travis]
- [Scrutinizer] with [hidev-scrutinizer]

[hidev]:                https://github.com/hiqdev/hidev
[hidev-readme]:         https://github.com/hiqdev/hidev-readme
[hidev-travis]:         https://github.com/hiqdev/hidev-travis
[hidev-license]:        https://github.com/hiqdev/hidev-license
[hidev-phpunit]:        https://github.com/hiqdev/hidev-phpunit
[hidev-phpstan]:        https://github.com/hiqdev/hidev-phpstan
[hidev-chkipper]:       https://github.com/hiqdev/hidev-chkipper
[hidev-composer]:       https://github.com/hiqdev/hidev-composer
[hidev-scrutinizer]:    https://github.com/hiqdev/hidev-scrutinizer
[hidev-php-cs-fixer]:   https://github.com/hiqdev/hidev-php-cs-fixer
[php-cs-fixer]:         https://github.com/FriendsOfPHP/PHP-CS-Fixer
[phpstan]:              https://github.com/phpstan/phpstan
[phpunit]:              https://phpunit.de/
[travis]:               https://travis-ci.org/
[scrutinizer]:          https://scrutinizer-ci.com/

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hidev-php"
```

or add

```json
"hiqdev/hidev-php": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2018, HiQDev (http://hiqdev.com/)
