<?php

namespace Cblink\Service\Develop\Image;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['image'] = function($pimple){
            return new Client($pimple);
        };
    }
}