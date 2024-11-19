# 微信支付清关报关（V2）

## 安装

`composer require ledc/wechat-custom-declare`

## 使用说明

开箱即用，只需要传入一个配置，初始化一个实例即可：

```php
use Ledc\WechatPayProfitSharing\Config;
use Ledc\WechatCustomDeclare\WechatCustom;

$config = [
    'mch_id' => 1360649000,
    'appid' => 1360649000,

    // 商户证书
    'private_key' => __DIR__ . '/certs/apiclient_key.pem',
    'certificate' => __DIR__ . '/certs/apiclient_cert.pem',

     // v3 API 秘钥
    'secret_key' => '43A03299A3C3FED3D8CE7B820Fxxxxx',

    // v2 API 秘钥
    'v2_secret_key' => '26db3e15cfedb44abfbb5fe94fxxxxx',

    // 平台证书：微信支付 APIv3 平台证书，需要使用工具下载
    // 下载工具：https://github.com/wechatpay-apiv3/CertificateDownloader
    'platform_certs' => [
        // 请使用绝对路径
        // '/path/to/wechatpay/cert.pem',
    ],
];

$wechatCustom = new WechatCustom(new Config($config));
```

在创建实例后，所有的方法都可以有IDE自动补全；例如：

```php
// 订单附加信息提交接口
$wechatCustom->order();
// 订单附加信息查询接口
$wechatCustom->query();
// 订单附加信息重推接口
$wechatCustom->redeclare();
```

## 官方文档

- https://pay.weixin.qq.com/doc/v2/merchant/4011985104

## 捐赠

![reward](reward.png)
