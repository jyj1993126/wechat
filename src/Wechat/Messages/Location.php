<?php

namespace Jyj1993126\Wechat\Messages;

use Jyj1993126\Wechat\Exception;

/**
 * 坐标消息
 *
 * @property string $content
 */
class Location extends BaseMessage
{

    /**
     * 属性
     *
     * @var array
     */
    protected $properties = array(
                             'lat',
                             'lon',
                             'scale',
                             'label',
                            );

    /**
     * 生成主动消息数组
     */
    public function toStaff()
    {
        throw new Exception('暂时不支持发送链接消息');
    }

    /**
     * 生成回复消息数组
     */
    public function toReply()
    {
        throw new Exception('暂时不支持回复链接消息');
    }
}
