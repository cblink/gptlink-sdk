<?php

namespace Cblink\Service\Develop\Sms;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{
    /**
     * 发送短信
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(array $data = [])
    {
        return $this->httpPost('/v1/sms/send', $data);
    }
}