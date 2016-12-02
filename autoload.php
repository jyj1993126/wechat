<?php

/*
 * This file is part of the Jyj1993126/socialite.
 *
 * (c) overtrue <i@Jyj1993126.github.io>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

spl_autoload_register(function ($class) {
    if (false !== stripos($class, 'Jyj1993126\Wechat')) {
        require_once __DIR__.'/src/'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 10)).'.php';
    }
});
