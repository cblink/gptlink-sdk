<?php

namespace Cblink\Service\Develop\User;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{

    /**
     * 用户个人信息
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function profile(array $query = [])
    {
        return $this->httpGet('/v1/user/profile', $query);
    }

    /**
     * 用户套餐包
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function package(array $query = [])
    {
        return $this->httpGet('/v1/user/package', $query);
    }

    /**
     * 用户消费记录
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function record(array $query = [])
    {
        return $this->httpGet('/v1/user/record', $query);
    }
}