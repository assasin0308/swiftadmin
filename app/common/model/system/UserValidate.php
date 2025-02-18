<?php


namespace app\common\model\system;

use think\Model;
use app\common\library\ParseData;
use think\model\concern\SoftDelete;

/**
 * @mixin \think\Model
 */
class UserValidate extends Model
{
    use SoftDelete;
    
    // 定义时间戳字段名
    protected $createTime = 'create_time';

}
