<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\hidev\config\php;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hiqdev/hidev/config/php/config.yml',
        ],
        'views' => [
            '@hiqdev/hidev/config/php/views',
        ],
    ];
}
