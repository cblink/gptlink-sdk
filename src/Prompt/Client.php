<?php

namespace Cblink\Service\Develop\Prompt;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{
    /**
     * 提示词生成器列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/v1/prompt', $query);
    }
}