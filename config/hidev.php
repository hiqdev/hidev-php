<?php
/**
 * HiDev plugin for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-php
 * @package   hidev-php
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2020, HiQDev (http://hiqdev.com/)
 */

return [
    'aliases' => $aliases,
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/php/views'],
                ],
            ],
        ],
    ],
];
