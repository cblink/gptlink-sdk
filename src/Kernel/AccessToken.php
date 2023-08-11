<?php

namespace Cblink\Service\Develop\Kernel;

use Psr\Http\Message\RequestInterface;

class AccessToken extends \Cblink\Service\Foundation\AccessToken
{
    public function getToken(RequestInterface $request = null, array $requestOptions = [])
    {
        return sprintf("Bearer %s", $this->app->config['api_key']);
    }
}