<?php

namespace Jyj1993126\Wechat\Messages;

/**
 * 链接消息
 *
 * @property string $content
 */
class Link extends BaseMessage
{

    /**
     * 属性
     *
     * @var array
     */
    protected $properties = array(
                             'title',
                             'description',
                             'url',
                            );
}
