<?php

use app\lakead\model\Category as CategoryModel;
use app\lakead\model\Content as ContentModel;

/**
 * 当前广告信息，列表
 *
 * @create 2020-2-1
 * @author deatil
 */
function lakead_contents($name = null) {
    if (empty($name)) {
        return [];
    }
    
    $cate = CategoryModel
        ::where([
            'name' => $name,
            'status' => 1,
        ])
        ->find();
    if (empty($cate)) {
        return [];
    }
    
    $contents = ContentModel
        ::where([
            'category_id' => $cate['id'],
            'status' => 1,
        ])
        ->where([
            ['start_time', '<=', time()],
            ['end_time', '>=', time()],
        ])
        ->order('sort ASC, add_time DESC')
        ->select();
    if (empty($contents)) {
        return [];
    }
    
    $contents = $contents->toArray();
    
    $newContent = [];
    foreach ($contents as $content) {
        $newContent[] = [
            'type' => $content['type'],
            'title' => $content['title'],
            'content' => $content['contents'],
        ];
    }
    
    return $newContent;
}
