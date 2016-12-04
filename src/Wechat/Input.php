<?php

namespace Jyj1993126\Wechat;

use Illuminate\Http\Request;
use Jyj1993126\Wechat\Utils\Bag;

class Input extends Bag
{
    /**
     * constructor.
     */
    public function __construct()
    {
	    $request = resolve( Request::class );
	    parent::__construct( $request->input() );
    }
}
