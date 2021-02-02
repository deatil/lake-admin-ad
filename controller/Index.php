<?php

namespace app\lakead\controller;

use Lake\Module\Controller\HomeBase;

/**
 * 广告
 *
 * @create 2021-2-2
 * @author deatil
 */
class Index extends HomeBase
{
    /**
     * 广告内容
     */
    public function index()
    {
        $name = request()->param('name');
        if (empty($name)) {
            return json([
                'code' => 100001,
                'msg' => 'error',
            ]);
        }
        
        $contents = lakead_contents($name);
        $contents = collect($contents)->map(function($item) {
            return $item['content'];
        });
        
        return json([
            'code' => 100000,
            'msg' => 'success',
            'data' => $contents,
        ]);
    }

}
