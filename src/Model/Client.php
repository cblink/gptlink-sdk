<?php

namespace Cblink\Service\Develop\Model;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{

    /**
     * 风格模型列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function styleModellists(array $query = [])
    {
        return $this->httpGet('/v1/style-model', $query);
    }

    /**
     * 风格模型详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function styleModelShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/v1/style-model/%s', $id), $query);
    }

    /**
     * 风格模型列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function masterModellists(array $query = [])
    {
        return $this->httpGet('/v1/master-model', $query);
    }

    /**
     * 风格模型详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function masterModelShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/v1/master-model/%s', $id), $query);
    }
}