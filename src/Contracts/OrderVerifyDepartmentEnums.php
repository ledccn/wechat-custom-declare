<?php

namespace Ledc\WechatCustomDeclare\Contracts;

/**
 * 验核机构
 * - 商户需将该字段取值UNIONPAY, NETSUNION, OTHERS映射至海关verDept字段的1、2、3
 */
class OrderVerifyDepartmentEnums
{
    /**
     * 银联
     */
    public const UNIONPAY = 'UNIONPAY';
    /**
     * 网联
     */
    public const NETSUNION = 'NETSUNION';
    /**
     * 其他(如余额支付，零钱通支付等)
     */
    public const OTHERS = 'OTHERS';

    /**
     * 映射至海关
     */
    public const UNIONPAY_VALUE = '1';
    /**
     * 映射至海关
     */
    public const NETSUNION_VALUE = '2';
    /**
     * 映射至海关
     */
    public const OTHERS_VALUE = '3';

    /**
     * 根据微信的核验机构字段，映射至海关verDept字段的1、2、3
     * @param string $value
     * @return string
     */
    public static function getValue(string $value): string
    {
        switch ($value) {
            case self::UNIONPAY:
                return self::UNIONPAY_VALUE;
            case self::NETSUNION:
                return self::NETSUNION_VALUE;
            case self::OTHERS:
            default:
                return self::OTHERS_VALUE;
        }
    }
}
