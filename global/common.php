<?php

use app\lakead\model\Category as CategoryModel;
use app\lakead\model\Content as ContentModel;

/**
 * 当前广告信息，列表
 *
 * @create 2020-2-1
 * @author deatil
 */
if (! function_exists('lakead_content_list')) {
    function lakead_content_list($name = null) {
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
}

/**
 * 当前广告显示信息
 *
 * @create 2020-2-2
 * @author deatil
 */
if (! function_exists('lakead_content_code_list')) {
    function lakead_content_html_list($name = null) {
        $contents = lakead_content_list($name);
        
        $newContents = collect($contents)->map(function($item) {
            if ($item['type'] == 1) {
                $data = '<span class="lakead-image">';
                $data .= '<img src="'.$item['content'].'" alt="'.$item['title'].'" />';
                $data .= '</span>';
            } elseif ($item['type'] == 2) {
                $data = '<span class="lakead-url">';
                $data .= '<a href="'.$item['content'].'" title="'.$item['title'].'">'.$item['title'].'</a>';
                $data .= '</span>';
            } elseif ($item['type'] == 3) {
                $data = '<span class="lakead-code">';
                $data .= $item['content'];
                $data .= '</span>';
            } elseif ($item['type'] == 4) {
                $data = '<span class="lakead-text">';
                $data .= $item['content'];
                $data .= '</span>';
            }
            
            return $data;
        })->toArray();
        
        return implode('', $newContents);
    }
}