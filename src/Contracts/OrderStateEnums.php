<?php

namespace Ledc\WechatCustomDeclare\Contracts;

/**
 * 申报状态枚举
 * - 支付单申报后，微信返回的状态码
 */
class OrderStateEnums
{
    /**
     * 未申报
     */
    public const UNDECLARED = 'UNDECLARED';
    /**
     * 申报已提交（订单已经送海关，商户重新申报，并且海关还有修改接口，那么记录的状态会是这个）
     */
    public const SUBMITTED = 'SUBMITTED';
    /**
     * 申报中
     */
    public const PROCESSING = 'PROCESSING';
    /**
     * 申报成功
     */
    public const SUCCESS = 'SUCCESS';
    /**
     * 申报失败
     */
    public const FAIL = 'FAIL';
    /**
     * 海关接口异常
     */
    public const EXCEPT = 'EXCEPT';
}
