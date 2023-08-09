<?php

namespace Cblink\Service\Develop\Model;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['model'] = function($pimple){
            return new Client($pimple);
        };
    }
}