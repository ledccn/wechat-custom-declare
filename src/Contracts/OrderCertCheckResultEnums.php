<?php

namespace Ledc\WechatCustomDeclare\Contracts;

/**
 * 订购人和支付人身份信息校验结果
 */
class OrderCertCheckResultEnums
{
    /**
     * 商户未上传订购人身份信息
     */
    public const UNCHECKED = 'UNCHECKED';
    /**
     * 商户上传的订购人身份信息与支付人身份信息一致
     */
    public const SAME = 'SAME';
    /**
     * 商户上传的订购人身份信息与支付人身份信息不一致
     */
    public const DIFFERENT = 'DIFFERENT';
}
