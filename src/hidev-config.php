<?php

/*
 * HiDev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-php
 * @package   hidev-php
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@hidev/php/config.yml',
            ],
            'views' => [
                '@hidev/php/views',
            ],
        ],
    ],
];
