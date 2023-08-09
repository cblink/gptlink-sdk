<?php

namespace Cblink\Service\Develop\Sms;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['sms'] = function($pimple){
            return new Client($pimple);
        };
    }
}