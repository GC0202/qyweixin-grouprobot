<?php

// +----------------------------------------------------------------------
// | 企业微信群通知
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/qyweixin-grouprobot
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/qyweixin-grouprobot
// | github 仓库地址 ：https://github.com/GC0202/qyweixin-grouprobot
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qyweixin-grouprobot
// +----------------------------------------------------------------------

use DtApp\Notice\QyWeiXin\Send;

require_once '../vendor/autoload.php';

$config = [
    'webhook' => 'https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=xxx-xx-xx', // 自定义机器人接口链接，webhook和key可配置其中一个
    'key' => 'xxx-xx-xx', // 自定义机器人接口链接的key，webhook和key可配置其中一个
];
$qywx = new Send($config);
var_dump($qywx->text('测试'));
var_dump($qywx->markdown('测试'));