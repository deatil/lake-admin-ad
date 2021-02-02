<?php

namespace app\lakead\controller;

use Lake\Module\Controller\HomeBase;

/**
 * 广告
 *
 * @create 2021-2-2
 * @author deatil
 */
class Data extends HomeBase
{
    /**
     * 广告列表内容
     * 
     * eg: 
     * lakead/data?name=[name]
     */
    public function index()
    {
        $name = request()->param('name');
        if (empty($name)) {
            return json([]);
        }
        
        $contents = lakead_content_list($name);
        
        return json($contents);
    }

}
