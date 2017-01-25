<?php
/**
 * HiDev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-php
 * @package   hidev-php
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */


return [
    'components' => [
        'config' => [
            'class' => hidev\components\Config::class,
            'include' => [
                '@hidev/php/config/goals.yml',
            ],
            'views' => [
                '@hidev/php/views',
            ],
        ],
    ],
];
