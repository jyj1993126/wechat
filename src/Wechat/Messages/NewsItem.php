<?php

namespace Jyj1993126\Wechat\Messages;

/**
 * 图文项
 */
class NewsItem extends BaseMessage
{

    /**
     * 属性
     *
     * @var array
     */
    protected $properties = array(
                             'title',
                             'description',
                             'pic_url',
                             'url',
                            );
}
