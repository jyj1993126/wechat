<?php

namespace Jyj1993126\Wechat;

use Jyj1993126\Wechat\Utils\Bag;

class Input extends Bag
{
    /**
     * constructor.
     */
    public function __construct()
    {
        parent::__construct(array_merge($_GET, $_POST));
    }
}
