<?php

namespace Cblink\Service\Develop\Image;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{

    /**
     * 发起绘画
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/v1/ai-image/create', $data);
    }

    /**
     * 计算作画所需积分
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cost(array $data = [])
    {
        return $this->httpPost('/v1/ai-image/cost', $data);
    }

    /**
     * 我的绘画详情
     *
     * @param int $id 传的是绘画的id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/v1/ai-image/draw/%s', $id), $query);
    }

    /**
     * 我的绘画列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/v1/ai-image/draw', $query);
    }
}