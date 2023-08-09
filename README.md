<h1 align="center"> GPTLINK - SDK </h1>

<p align="center"> .</p>


## 安装

```shell
$ composer require cblink/gptlink-sdk -vvv
```

## 如何使用

```php
use \Cblink\Service\Develop\Application;
    
$config = [
    'api_key' => config('api_key'),
    'base_url' => config('base_url'),
];

$app = new Application($config);

$data = [
    'prompt' => '一个漂亮的年轻女孩，手持魔杖，穿洛丽塔服装，站立姿势',
    'model' => 22,
    'width' => 512,
    'height' => 512,
    'num' => 1
];

// 请求数据
$response = $app->image->create($data);

var_dump($response);

```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cblink-service/order-sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cblink-service/order-sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT