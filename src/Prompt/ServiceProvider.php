<?php

namespace Cblink\Service\Develop\Prompt;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['prompt'] = function($pimple){
            return new Client($pimple);
        };
    }
}