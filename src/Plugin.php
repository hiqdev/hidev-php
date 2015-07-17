<?php

/*
 * HiQDev&#039;s hidev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-config-php
 * @package   hidev-config-php
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
