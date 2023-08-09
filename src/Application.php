<?php

namespace Cblink\Service\Develop;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Image\Client $image ai绘画
 * @property-read Model\Client $model 绘图模型
 * @property-read Prompt\Client $prompt 提示词生成器
 * @property-read Sms\Client $sms 短信
 * @property-read User\Client $user 用户信息
 */
class Application extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Image\ServiceProvider::class,
        Model\ServiceProvider::class,
        Prompt\ServiceProvider::class,
        Sms\ServiceProvider::class,
        User\ServiceProvider::class,
    ];
}