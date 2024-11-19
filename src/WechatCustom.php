<?php

namespace Ledc\WechatCustomDeclare;

use Ledc\WechatPayProfitSharing\Config;
use Ledc\WechatPayProfitSharing\HttpResponse;
use Ledc\WechatPayProfitSharing\Traits\HasConfig;
use Ledc\WechatPayProfitSharing\Traits\HasPostRequestV2;

/**
 * 微信支付清关报关(V2)
 * @link https://pay.weixin.qq.com/doc/v2/merchant/4011985104
 * @link https://pay.weixin.qq.com/wiki/doc/api/external/declarecustom.php?chapter=1_1
 */
class WechatCustom
{
    use HasConfig, HasPostRequestV2;

    /**
     * 构造函数
     * @param Config $config 普通直连分账配置
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * 订单附加信息提交接口
     * - 该接口用于商户提交海关需要的订单附加信息
     * @link https://pay.weixin.qq.com/doc/v2/merchant/4011985151
     * @param array $params
     * @return HttpResponse
     */
    public function order(array $params): HttpResponse
    {
        /**
         * 【支付单申报规则】
         * a.如果没有拆单，就以支付时的out_trade_no和transaction_id、原支付单对应的人民币金额（如有部分退款，减去部分退款金额）申报
         * b.如果拆单了，就以申报接口传的商户子单号sub_order_no和接口返回的子支付单号sub_order_id、申报接口传的order_fee金额申报
         * c.拆单的判断标准：调用支付申报接口时，商户传了sub_order_no就认为是拆单
         * 【身份信息校验申报规则】
         * a.身份信息校验不管是否一致，微信支付都只能以系统登记的支付人信息推送海关
         * b.商户调用修改接口上传新的用户身份信息，微信支付会重新校验
         */
        return $this->request('cgi-bin/mch/customs/customdeclareorder', $params);
    }

    /**
     * 订单附加信息查询接口
     * - 商户通过订单号查询提交的订单附加信息。如果是微信收集的实名信息，查询接口不返回实名信息内容
     * @link https://pay.weixin.qq.com/doc/v2/merchant/4011985273
     * @param array $params
     * @return HttpResponse
     */
    public function query(array $params): HttpResponse
    {
        return $this->request('cgi-bin/mch/customs/customdeclarequery', $params);
    }

    /**
     * 订单附加信息重推接口
     * @link https://pay.weixin.qq.com/doc/v2/merchant/4011985318
     * @param array $params
     * @return HttpResponse
     */
    public function redeclare(array $params): HttpResponse
    {
        return $this->request('cgi-bin/mch/newcustoms/customdeclareredeclare', $params);
    }

    /**
     * 发起请求
     * @param string $url
     * @param array $params
     * @param array $options
     * @param bool $requiredCert 请求需要双向证书
     * @return HttpResponse
     */
    public function request(string $url, array $params, array $options = [], bool $requiredCert = false): HttpResponse
    {
        $params['appid'] = $this->getConfig()->appid;
        $params['mch_id'] = $this->getConfig()->mch_id;
        return $this->post($url, $params, $options, $requiredCert);
    }
}
