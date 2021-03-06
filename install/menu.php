<?php
return [
    [
        "route" => "admin/lakead/index",
        "method" => "GET",
        "type" => 2,
        "is_menu" => 1,
        "title" => "广告管理",
        "icon" => "icon-prompt",
        "tip" => "",
        "listorder" => 115,
        "child" => [
            [
                "route" => "admin/lakeadCate/index",
                "method" => "GET",
                "type" => 1,
                "is_menu" => 1,
                "title" => "分类位置",
                "icon" => "icon-label",
                "listorder" => 5,
                "child" => [
                    [
                        "route" => "admin/lakeadCate/index",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "分类位置",
                    ],
                    [
                        "route" => "admin/lakeadCate/add",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "添加分类",
                    ],
                    [
                        "route" => "admin/lakeadCate/add",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "添加分类",
                    ],
                    [
                        "route" => "admin/lakeadCate/edit",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "编辑分类",
                    ],
                    [
                        "route" => "admin/lakeadCate/edit",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "编辑分类",
                    ],
                    [
                        "route" => "admin/lakeadCate/delete",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "删除分类",
                    ],
                    [
                        "route" => "admin/lakeadCate/status",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "分类状态",
                    ],
                    [
                        "route" => "admin/lakeadCate/sort",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "分类排序",
                    ],
                ],
            ],
            [
                "route" => "admin/lakeadContent/index",
                "method" => "GET",
                "type" => 1,
                "is_menu" => 1,
                "title" => "广告数据",
                "icon" => "icon-shiyongwendang",
                "listorder" => 10,
                "child" => [
                    [
                        "route" => "admin/lakeadContent/index",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "广告列表",
                    ],
                    [
                        "route" => "admin/lakeadContent/add",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "添加广告",
                    ],
                    [
                        "route" => "admin/lakeadContent/add",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "添加广告",
                    ],
                    [
                        "route" => "admin/lakeadContent/edit",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "编辑广告",
                    ],
                    [
                        "route" => "admin/lakeadContent/edit",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "编辑广告",
                    ],
                    [
                        "route" => "admin/lakeadContent/delete",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "删除广告",
                    ],
                    [
                        "route" => "admin/lakeadContent/status",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "广告状态",
                    ],
                    [
                        "route" => "admin/lakeadContent/sort",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "广告排序",
                    ],
                ],
            ],
        ],
    ],
];
