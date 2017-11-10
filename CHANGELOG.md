# hiqdev/hidev-php

## [0.6.1] - 2017-11-10

- Removed build PHP 5.6, 7.0 and HHVM from Travis ([@hiqsol])

## [0.6.0] - 2017-05-03

- Redone to new hidev ([@hiqsol])

## [0.4.5] - 2017-03-23

- Updated travis config to build on 7.1, dropped 5.5 support ([@SilverFire])

## [0.4.4] - 2017-01-25

- Added `class` to config component configuration - it is necessary for testing in other projects ([@hiqsol])

## [0.4.3] - 2016-10-29

- Changed `update` action: moved to hidev StartController ([@hiqsol])

## [0.4.2] - 2016-07-31

- Added use of `hidev-chkipper` ([@hiqsol])

## [0.4.1] - 2016-06-16

- Added back `.gitignore` to default goal ([@hiqsol])
- Added allow failure for PHP 5.5 ([@hiqsol])

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin` ([@hiqsol])
- Removed `CHANGELOG.md` and `.hidev/commits.md` from default goals ([@hiqsol])

## [0.3.4] - 2016-04-13

- Fixed build with asset-packagist ([@hiqsol])

## [0.3.3] - 2016-04-13

- Changed to `hidev-config` <- `extension-config` ([@hiqsol])

## [0.3.2] - 2016-03-30

## [0.3.1] - 2016-01-17

- Added `composer --version` after composer self-update on travis `before_install` ([@hiqsol])

## [0.3.0] - 2016-01-15

- Fixed tests ([@hiqsol])
- Added composer self-update on travis `before_install` ([@hiqsol])
- Added general `install` and `update` goals ([@hiqsol])
- Changed hidev-travis-ci -> hidev-travis ([@hiqsol])
- Changed deps -> before ([@hiqsol])
- Changed: redone with yii2-extraconfig ([@hiqsol])

## [0.2.1] - 2015-12-23

- Added Travis `after_script` upload coverage to Scrutinizer ([@hiqsol])

## [0.2.0] - 2015-12-23

- Added Scrutinizer badges ([@hiqsol])
- Changed php-cs-fixer config to level psr2 only, else moved to `hiqdev/hidev-vendor` ([@hiqsol])

## [0.1.7] - 2015-12-15

- Fixed phpdoc options for php-cs-fixer ([@hiqsol])
- Fixed tests ([@hiqsol])

## [0.1.6] - 2015-12-14

- Changed Travis build: dont build 5.4 and dont allow failure 7 ([@hiqsol])

## [0.1.5] - 2015-11-26

- Added tests and coverage ([@hiqsol])

## [0.1.4] - 2015-11-24

- Added Travis CI integration ([@hiqsol])
- Changed default test system to phpunit and added `build` goal ([@hiqsol])
- Added very basic testing ([@hiqsol])
- Added PHPUnit integration ([@hiqsol])

## [0.1.3] - 2015-11-18

- Fixed php-cs-fixer settings: disabled `return`, `empty_return` and `phpdoc_no_empty_return` fixers ([@hiqsol])
- Changed: redone to `hidev-php` ([@hiqsol])

## [0.1.2] - 2015-11-09

- Fixed php-cs-fixer config: dont touch aligning for equals and double arrows ([@hiqsol])

## [0.1.1] - 2015-11-06

- Changed PHP-CS-Fixer options: disabled `align_double_arrow` ([@SilverFire])

## [0.1.0] - 2015-10-24

- Added README badges for Packagist and VersionEye ([@hiqsol])

## [0.0.5] - 2015-10-15

- Added README Installation section template ([@hiqsol])

## [0.0.4] - 2015-09-09

- Added basic Class.php generation with: hidev gen Class ([@hiqsol])

## [0.0.3] - 2015-08-23

- Added skip `vendor` and `web/assets` from fixing ([@hiqsol])
- Fixed project description ([@hiqsol])

## [0.0.2] - 2015-08-17

- Changed to be usable for any vendor ([@hiqsol])
- Fixed dependencies for `all` goal ([@hiqsol])

## [0.0.1] - 2015-07-11

- Changed config: redone parent to plugins ([@hiqsol])
- Inited ([@hiqsol])

## [Development started] - 2015-07-09

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[Under development]: https://github.com/hiqdev/hidev-php/compare/0.6.0...HEAD
[0.4.3]: https://github.com/hiqdev/hidev-php/compare/0.4.2...0.4.3
[0.4.2]: https://github.com/hiqdev/hidev-php/compare/0.4.1...0.4.2
[0.4.1]: https://github.com/hiqdev/hidev-php/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/hiqdev/hidev-php/compare/0.3.4...0.4.0
[0.3.4]: https://github.com/hiqdev/hidev-php/compare/0.3.3...0.3.4
[0.3.3]: https://github.com/hiqdev/hidev-php/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/hiqdev/hidev-php/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/hiqdev/hidev-php/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/hiqdev/hidev-php/compare/0.2.1...0.3.0
[0.2.1]: https://github.com/hiqdev/hidev-php/compare/0.2.0...0.2.1
[0.2.0]: https://github.com/hiqdev/hidev-php/compare/0.1.7...0.2.0
[0.1.7]: https://github.com/hiqdev/hidev-php/compare/0.1.6...0.1.7
[0.1.6]: https://github.com/hiqdev/hidev-php/compare/0.1.5...0.1.6
[0.1.5]: https://github.com/hiqdev/hidev-php/compare/0.1.4...0.1.5
[0.1.4]: https://github.com/hiqdev/hidev-php/compare/0.1.3...0.1.4
[0.1.3]: https://github.com/hiqdev/hidev-php/compare/0.1.2...0.1.3
[0.1.2]: https://github.com/hiqdev/hidev-php/compare/0.1.1...0.1.2
[0.1.1]: https://github.com/hiqdev/hidev-php/compare/0.1.0...0.1.1
[0.1.0]: https://github.com/hiqdev/hidev-php/compare/0.0.5...0.1.0
[0.0.5]: https://github.com/hiqdev/hidev-php/compare/0.0.4...0.0.5
[0.0.4]: https://github.com/hiqdev/hidev-php/compare/0.0.3...0.0.4
[0.0.3]: https://github.com/hiqdev/hidev-php/compare/0.0.2...0.0.3
[0.0.2]: https://github.com/hiqdev/hidev-php/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/hidev-php/releases/tag/0.0.1
[0.4.4]: https://github.com/hiqdev/hidev-php/compare/0.4.3...0.4.4
[0.4.5]: https://github.com/hiqdev/hidev-php/compare/0.4.4...0.4.5
[0.6.0]: https://github.com/hiqdev/hidev-php/compare/0.4.5...0.6.0
[0.6.1]: https://github.com/hiqdev/hidev-php/compare/0.6.0...0.6.1
