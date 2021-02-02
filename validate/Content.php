<?php

namespace app\lakead\validate;

use think\Validate;

/**
 * 内容
 *
 * @create 2021-2-1
 * @author deatil
 */
class Content extends Validate 
{
    protected $rule = [
        'title' => 'require',
        'type' => 'require',
    ];
    
    protected $message = [
        'title.require' => '标题不能为空',
        'type.require' => '类型不能为空！',
    ];
    
    protected $scene = [
        'add' => [
            'title', 
            'type',
        ],
        'edit' => [
            'title', 
            'type',
        ],
    ];
}