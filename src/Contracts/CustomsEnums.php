<?php

namespace Ledc\WechatCustomDeclare\Contracts;

/**
 * 海关枚举
 */
class CustomsEnums
{
    /**
     * 广州（总署版）
     * @description 接口文档列表没有的海关，商户在商户平台新增海关备案信息时选“广州（总署）”，备案号和备案名称填商户在海关登记的信息，然后按商户平台登记的信息调用“订单附加信息提交接口”即可
     */
    public const GUANGZHOU_ZS = 'GUANGZHOU_ZS';
    /**
     * 杭州（总署版）
     */
    public const HANGZHOU_ZS = 'HANGZHOU_ZS';
    /**
     * 宁波
     */
    public const NINGBO = 'NINGBO';
    /**
     * 郑州（保税物流中心）
     */
    public const ZHENGZHOU_BS = 'ZHENGZHOU_BS';
    /**
     * 重庆
     */
    public const CHONGQING = 'CHONGQING';
    /**
     * 上海（总署版）
     */
    public const SHANGHAI_ZS = 'SHANGHAI_ZS';
    /**
     * 深圳
     */
    public const SHENZHEN = 'SHENZHEN';
    /**
     * 郑州综保（总署版）
     */
    public const ZHENGZHOU_ZH_ZS = 'ZHENGZHOU_ZH_ZS';
    /**
     * 天津
     */
    public const TIANJIN = 'TIANJIN';
    /**
     * 总署
     */
    public const ZONGSHU = 'ZONGSHU';
}
