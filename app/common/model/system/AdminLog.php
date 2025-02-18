<?php

namespace app\common\model\system;

use think\Model;


/**
 * admin_log
 * 登录日志
 * @package app\admin\model\system
 */
class AdminLog extends Model
{

    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';
    protected $deleteTime = false;

}