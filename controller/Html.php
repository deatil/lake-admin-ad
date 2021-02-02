<?php

namespace app\lakead\controller;

use Lake\Module\Controller\HomeBase;

/**
 * 广告页面内容
 *
 * @create 2021-2-2
 * @author deatil
 */
class Html extends HomeBase
{
    /**
     * 广告html内容
     * 
     * eg: 
     * lakead/html?name=[name]
     */
    public function index()
    {
        $name = request()->param('name');
        if (empty($name)) {
            return null;
        }
        
        $contents = lakead_content_html_list($name);
        
        return response($contents);
    }
}
