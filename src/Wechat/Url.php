<?php

namespace Jyj1993126\Wechat;
use Illuminate\Http\Request;

/**
 * 链接.
 */
class Url
{
    /**
     * Http对象
     *
     * @var Http
     */
    protected $http;

    const API_SHORT_URL = 'https://api.weixin.qq.com/cgi-bin/shorturl';

    /**
     * constructor.
     *
     * @param string $appId
     * @param string $appSecret
     */
    public function __construct($appId, $appSecret)
    {
        $this->http = new Http(new AccessToken($appId, $appSecret));
    }

    /**
     * 转短链接.
     *
     * @param string $url
     *
     * @return string
     */
    public function short($url)
    {
        $params = array(
                   'action' => 'long2short',
                   'long_url' => $url,
                  );

        $response = $this->http->jsonPost(self::API_SHORT_URL, $params);

        return $response['short_url'];
    }

    /**
     * 获取当前URL.
     *
     * @return string
     */
    public static function current()
    {
	    /**
	     * @var Request $request
	     */
	    $request = resolve( Request::class );
	    $protocol = ( !empty( $request->server( 'HTTPS' ) )
                        && $request->server('HTTPS') !== 'off'
                        || $request->server('SERVER_PORT') === 443) ? 'https://' : 'http://';

		$host = $request->server('HTTP_X_FORWARDED_HOST',$request->server('HTTP_HOST'));

        return $protocol.$host.$request->server('REQUEST_URI');
    }
}
