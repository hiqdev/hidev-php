hiqdev/hidev-php
----------------

## [Under development]

- Added `hidev-chkipper`
    - [cc8856d] 2016-07-31 added `hidev-chkipper` [sol@hiqdev.com]

## [0.4.1] - 2016-06-16

- Added back `.gitignore` to default goal
    - [ebeece6] 2016-06-10 added `.gitinore` to default goal [sol@hiqdev.com]
- Added allow failure for PHP 5.5
    - [9010741] 2016-05-28 allow failure php 5.5 [sol@hiqdev.com]

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [d38f8dc] 2016-05-21 redoing to composer-config-plugin [sol@hiqdev.com]
- Removed `CHANGELOG.md` and `.hidev/commits.md` from default goals
    - [12b7617] 2016-05-21 removed CHANGELOG.md and .hidev/commits.md from default goals [sol@hiqdev.com]

## [0.3.4] - 2016-04-13

- Fixed build with asset-packagist
    - [a141253] 2016-04-13 fixed build with asset-packagist [sol@hiqdev.com]

## [0.3.3] - 2016-04-13

- Changed to `hidev-config` <- `extension-config`
    - [34db12d] 2016-04-13 redone to `hidev-config` <- `extension-config` [sol@hiqdev.com]

## [0.3.2] - 2016-03-30

    - [9f28ac4] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [sol@hiqdev.com]

## [0.3.1] - 2016-01-17

- Added `composer --version` after composer self-update on travis `before_install`
    - [587fb8f] 2016-01-17 + `composer --version` after composer self-update on travis `before_install` [sol@hiqdev.com]

## [0.3.0] - 2016-01-15

- Fixed tests
    - [23e67d0] 2016-01-15 fixed tests [sol@hiqdev.com]
- Added composer self-update on travis `before_install`
    - [0d05e26] 2016-01-14 fixed travis `before_install` composer self-update [sol@hiqdev.com]
    - [fe1ae73] 2016-01-14 + travis composer/self-update on `before_install` [sol@hiqdev.com]
- Added general `install` and `update` goals
    - [a23d9ec] 2016-01-14 + install and update goals [sol@hiqdev.com]
- Changed hidev-travis-ci -> hidev-travis
    - [bf578ac] 2016-01-14 changed hidev-travis-ci -> hidev-travis [sol@hiqdev.com]
    - [1e5c5ca] 2016-01-13 Changed hidev-travis-ci -> hidev-travis [sol@hiqdev.com]
- Changed deps -> before
    - [52f1556] 2016-01-13 Changed deps -> before [sol@hiqdev.com]
- Changed: redone with yii2-extraconfig
    - [34b6a14] 2016-01-14 removed Plugin.php in favour of yii2-extraconfig [sol@hiqdev.com]
    - [95b45b2] 2016-01-06 changed config structure [sol@hiqdev.com]
    - [dadf5b1] 2016-01-06 redoing with yii2-extraconfig [sol@hiqdev.com]
    - [6f3de9d] 2016-01-02 + scrutinizer configuration [sol@hiqdev.com]

## [0.2.1] - 2015-12-23

- Added Travis `after_script` upload coverage to Scrutinizer
    - [fe2e321] 2015-12-23 + travis `after_script` upload coverage to scrutinizer [sol@hiqdev.com]

## [0.2.0] - 2015-12-23

- Added Scrutinizer badges
    - [0a87572] 2015-12-23 fixed composer requires [sol@hiqdev.com]
    - [50d6178] 2015-12-23 + scrutinizer badges [sol@hiqdev.com]
- Changed php-cs-fixer config to level psr2 only, else moved to `hiqdev/hidev-vendor`
    - [a280d34] 2015-12-23 fixing build [sol@hiqdev.com]
    - [a26c8d9] 2015-12-21 changed php-cs-fixer config to level psr2 only, else moved to [sol@hiqdev.com]

## [0.1.7] - 2015-12-15

- Fixed phpdoc options for php-cs-fixer
    - [c48f34c] 2015-12-15 fixed phpdoc options for php-cs-fixer [sol@hiqdev.com]
- Fixed tests
    - [c6064a5] 2015-12-14 fixed tests: + require-dev yii2-pluginmanager [sol@hiqdev.com]
    - [09edc3d] 2015-12-14 fixed tests [sol@hiqdev.com]

## [0.1.6] - 2015-12-14

- Changed Travis build: dont build 5.4 and dont allow failure 7
    - [ebd2f47] 2015-12-14 changed Travis build: dont build 5.4 and dont allow failur 7 [sol@hiqdev.com]

## [0.1.5] - 2015-11-26

- Added tests and coverage
    - [43dd041] 2015-11-26 improved tests [sol@hiqdev.com]
    - [f59a1e8] 2015-11-26 + phpunit coverage [sol@hiqdev.com]
    - [743d1af] 2015-11-26 removed unused templates [sol@hiqdev.com]
    - [d755bfc] 2015-11-24 fixed require-dev [sol@hiqdev.com]

## [0.1.4] - 2015-11-24

- Added Travis CI integration
    - [dd13a9a] 2015-11-24 + Travis CI badge [sol@hiqdev.com]
    - [a350ac8] 2015-11-21 doing travis [sol@hiqdev.com]
    - [908e485] 2015-11-20 + allow travis failures for php 7 and hhvm [sol@hiqdev.com]
    - [c2127af] 2015-11-20 trying travis [sol@hiqdev.com]
    - [facad43] 2015-11-19 + php 5.4 for travis [sol@hiqdev.com]
    - [ab4f350] 2015-11-19 adding Travis CI [sol@hiqdev.com]
    - [3ac63e5] 2015-11-18 + hidev-travis-ci [sol@hiqdev.com]
- Changed default test system to phpunit and added `build` goal
    - [0e00e9e] 2015-11-23 changed default test system to phpunit and added `build` goal [sol@hiqdev.com]
- Added very basic testing
    - [4bfdb84] 2015-11-23 + test [sol@hiqdev.com]
- Added PHPUnit integration
    - [ec0b291] 2015-11-23 + requires [sol@hiqdev.com]
    - [56d3d35] 2015-11-23 + package require-devs [sol@hiqdev.com]

## [0.1.3] - 2015-11-18

- Fixed php-cs-fixer settings: disabled `return`, `empty_return` and `phpdoc_no_empty_return` fixers
    - [d34b52b] 2015-11-18 php-cs-fixed [sol@hiqdev.com]
    - [3394aed] 2015-11-18 php-cs-fixed [sol@hiqdev.com]
    - [4c5704b] 2015-11-18 + disabled `phpdoc_no_empty_return` and `return` fixers [sol@hiqdev.com]
    - [db0359e] 2015-11-09 disabled `empty_return` fixer [sol@hiqdev.com]
- Changed: redone to `hidev-php`
    - [8761f1c] 2015-11-17 hideved [sol@hiqdev.com]
    - [415c189] 2015-11-17 fixed namespace [sol@hiqdev.com]
    - [d2de6a4] 2015-11-17 redoing to `hidev-php` [sol@hiqdev.com]

## [0.1.2] - 2015-11-06

- Fixed php-cs-fixer config: dont touch aligning for equals and double arrows
    - [8135ccf] 2015-11-09 php-cs-fixed [sol@hiqdev.com]
    - [62d68e7] 2015-11-09 + dont touch aligning for equals and double arrows [sol@hiqdev.com]

## [0.1.1] - 2015-11-06

- Changed PHP-CS-Fixer options: disabled `align_double_arrow`
    - [d92805e] 2015-11-06 Disabled option `align_double_arrow` in PHP-CS-Fixer [d.naumenko.a@gmail.com]

## [0.1.0] - 2015-10-24

- Added README badges for Packagist and VersionEye
    - [8b470ab] 2015-10-24 + readme badges [sol@hiqdev.com]

## [0.0.5] - 2015-10-15

- Added README Installation section template
    - [c6f95c5] 2015-10-15 + readme Installation section template [sol@hiqdev.com]

## [0.0.4] - 2015-09-09

- Added basic Class.php generation with: hidev gen Class
    - [4992bc2] 2015-09-09 + simple Class template [sol@hiqdev.com]
    - [1509d25] 2015-09-09 + gen alias [sol@hiqdev.com]

## [0.0.3] - 2015-08-23

- Added skip `vendor` and `web/assets` from fixing
    - [08d9d19] 2015-08-23 + skip vendor and web/assets from fixing [sol@hiqdev.com]
- Fixed project description
    - [f8e1ba9] 2015-08-17 fixed project description [sol@hiqdev.com]

## [0.0.2] - 2015-08-17

- Changed to be usable for any vendor
    - [270433d] 2015-08-17 making this extension generally usable [sol@hiqdev.com]
    - [3db083a] 2015-08-17 * README [sol@hiqdev.com]
- Fixed dependencies for `all` goal
    - [df50f43] 2015-07-20 * all goal deps: - `.php_cs`, git [sol@hiqdev.com]
    - [7323c43] 2015-07-17 php-cs-fixed [sol@hiqdev.com]
    - [c83d6cb] 2015-07-17 regenerated .gitignore [sol@hiqdev.com]
    - [b1fdf38] 2015-07-17 * deps: git moved to be last [sol@hiqdev.com]

## [0.0.1] - 2015-07-11

- Changed config: redone parent to plugins
    - [a8b6278] 2015-07-11 simplified .hidev/config require to hidev-config-php only [sol@hiqdev.com]
    - [f0a8c85] 2015-07-11 + require at .hidev/config [sol@hiqdev.com]
    - [2d01310] 2015-07-11 moved back to .hidev [sol@hiqdev.com]
    - [472c6f6] 2015-07-11 moved back to .hidev [sol@hiqdev.com]
    - [dddb74e] 2015-07-10 - require-dev from composer.json [sol@hiqdev.com]
    - [d54d2ed] 2015-07-09 fixed namespace at Plugin.php [sol@hiqdev.com]
    - [dc61fdd] 2015-07-09 - vendor config (it is at hidev-config) [sol@hiqdev.com]
    - [5c8207c] 2015-07-09 redoing parent to plugins [sol@hiqdev.com]
- Inited
    - [f33f94b] 2015-07-09 inited [sol@hiqdev.com]
    - [b953b35] 2015-07-09 inited [sol@hiqdev.com]

## [Development started] - 2015-07-09

[ebeece6]: https://github.com/hiqdev/hidev-php/commit/ebeece6
[9010741]: https://github.com/hiqdev/hidev-php/commit/9010741
[d38f8dc]: https://github.com/hiqdev/hidev-php/commit/d38f8dc
[12b7617]: https://github.com/hiqdev/hidev-php/commit/12b7617
[a141253]: https://github.com/hiqdev/hidev-php/commit/a141253
[34db12d]: https://github.com/hiqdev/hidev-php/commit/34db12d
[9f28ac4]: https://github.com/hiqdev/hidev-php/commit/9f28ac4
[587fb8f]: https://github.com/hiqdev/hidev-php/commit/587fb8f
[23e67d0]: https://github.com/hiqdev/hidev-php/commit/23e67d0
[0d05e26]: https://github.com/hiqdev/hidev-php/commit/0d05e26
[fe1ae73]: https://github.com/hiqdev/hidev-php/commit/fe1ae73
[a23d9ec]: https://github.com/hiqdev/hidev-php/commit/a23d9ec
[bf578ac]: https://github.com/hiqdev/hidev-php/commit/bf578ac
[1e5c5ca]: https://github.com/hiqdev/hidev-php/commit/1e5c5ca
[52f1556]: https://github.com/hiqdev/hidev-php/commit/52f1556
[34b6a14]: https://github.com/hiqdev/hidev-php/commit/34b6a14
[95b45b2]: https://github.com/hiqdev/hidev-php/commit/95b45b2
[dadf5b1]: https://github.com/hiqdev/hidev-php/commit/dadf5b1
[6f3de9d]: https://github.com/hiqdev/hidev-php/commit/6f3de9d
[fe2e321]: https://github.com/hiqdev/hidev-php/commit/fe2e321
[0a87572]: https://github.com/hiqdev/hidev-php/commit/0a87572
[50d6178]: https://github.com/hiqdev/hidev-php/commit/50d6178
[a280d34]: https://github.com/hiqdev/hidev-php/commit/a280d34
[a26c8d9]: https://github.com/hiqdev/hidev-php/commit/a26c8d9
[c48f34c]: https://github.com/hiqdev/hidev-php/commit/c48f34c
[c6064a5]: https://github.com/hiqdev/hidev-php/commit/c6064a5
[09edc3d]: https://github.com/hiqdev/hidev-php/commit/09edc3d
[ebd2f47]: https://github.com/hiqdev/hidev-php/commit/ebd2f47
[43dd041]: https://github.com/hiqdev/hidev-php/commit/43dd041
[f59a1e8]: https://github.com/hiqdev/hidev-php/commit/f59a1e8
[743d1af]: https://github.com/hiqdev/hidev-php/commit/743d1af
[d755bfc]: https://github.com/hiqdev/hidev-php/commit/d755bfc
[dd13a9a]: https://github.com/hiqdev/hidev-php/commit/dd13a9a
[a350ac8]: https://github.com/hiqdev/hidev-php/commit/a350ac8
[908e485]: https://github.com/hiqdev/hidev-php/commit/908e485
[c2127af]: https://github.com/hiqdev/hidev-php/commit/c2127af
[facad43]: https://github.com/hiqdev/hidev-php/commit/facad43
[ab4f350]: https://github.com/hiqdev/hidev-php/commit/ab4f350
[3ac63e5]: https://github.com/hiqdev/hidev-php/commit/3ac63e5
[0e00e9e]: https://github.com/hiqdev/hidev-php/commit/0e00e9e
[4bfdb84]: https://github.com/hiqdev/hidev-php/commit/4bfdb84
[ec0b291]: https://github.com/hiqdev/hidev-php/commit/ec0b291
[56d3d35]: https://github.com/hiqdev/hidev-php/commit/56d3d35
[d34b52b]: https://github.com/hiqdev/hidev-php/commit/d34b52b
[3394aed]: https://github.com/hiqdev/hidev-php/commit/3394aed
[4c5704b]: https://github.com/hiqdev/hidev-php/commit/4c5704b
[db0359e]: https://github.com/hiqdev/hidev-php/commit/db0359e
[8761f1c]: https://github.com/hiqdev/hidev-php/commit/8761f1c
[415c189]: https://github.com/hiqdev/hidev-php/commit/415c189
[d2de6a4]: https://github.com/hiqdev/hidev-php/commit/d2de6a4
[8135ccf]: https://github.com/hiqdev/hidev-php/commit/8135ccf
[62d68e7]: https://github.com/hiqdev/hidev-php/commit/62d68e7
[d92805e]: https://github.com/hiqdev/hidev-php/commit/d92805e
[8b470ab]: https://github.com/hiqdev/hidev-php/commit/8b470ab
[c6f95c5]: https://github.com/hiqdev/hidev-php/commit/c6f95c5
[4992bc2]: https://github.com/hiqdev/hidev-php/commit/4992bc2
[1509d25]: https://github.com/hiqdev/hidev-php/commit/1509d25
[08d9d19]: https://github.com/hiqdev/hidev-php/commit/08d9d19
[f8e1ba9]: https://github.com/hiqdev/hidev-php/commit/f8e1ba9
[270433d]: https://github.com/hiqdev/hidev-php/commit/270433d
[3db083a]: https://github.com/hiqdev/hidev-php/commit/3db083a
[df50f43]: https://github.com/hiqdev/hidev-php/commit/df50f43
[7323c43]: https://github.com/hiqdev/hidev-php/commit/7323c43
[c83d6cb]: https://github.com/hiqdev/hidev-php/commit/c83d6cb
[b1fdf38]: https://github.com/hiqdev/hidev-php/commit/b1fdf38
[a8b6278]: https://github.com/hiqdev/hidev-php/commit/a8b6278
[f0a8c85]: https://github.com/hiqdev/hidev-php/commit/f0a8c85
[2d01310]: https://github.com/hiqdev/hidev-php/commit/2d01310
[472c6f6]: https://github.com/hiqdev/hidev-php/commit/472c6f6
[dddb74e]: https://github.com/hiqdev/hidev-php/commit/dddb74e
[d54d2ed]: https://github.com/hiqdev/hidev-php/commit/d54d2ed
[dc61fdd]: https://github.com/hiqdev/hidev-php/commit/dc61fdd
[5c8207c]: https://github.com/hiqdev/hidev-php/commit/5c8207c
[f33f94b]: https://github.com/hiqdev/hidev-php/commit/f33f94b
[b953b35]: https://github.com/hiqdev/hidev-php/commit/b953b35
[cc8856d]: https://github.com/hiqdev/hidev-php/commit/cc8856d
