<?php
/*
 * @todo 构建菜单数组，用于前渲染
 * @Author: Paco
 * @Date:   2017-03-11
 * @qq群 114747233
 * +----------------------------------------------------------------------
 * | jqadmin [ jq酷打造的一款懒人后台模板 ]
 * | Copyright (c) 2017 http://jqadmin.jqcool.net All rights reserved.
 * | Licensed ( http://jqadmin.jqcool.net/licenses/ )
 * | Author: Paco <admin@jqcool.net>
 * +----------------------------------------------------------------------
 */

$menu = [
    [ "id"=>1,  "url"=>"", "name"=>"内容管理","iconfont"=>"&#xe637;","sub"=>
        [
            ["id"=>5,  "url"=>"", "name"=>"内容管理","iconfont"=>"&#xe637;","sub"=>
                [
                    ["id"=>6,  "url"=>"article", "name"=>"文章列表","iconfont"=>"&#xe62a;"],
                    ["id"=>7,  "url"=>"article-cat", "name"=>"文章分类","iconfont"=>"&#xe635;"],
                    ["id"=>8,  "url"=>"tag", "name"=>"标签管理","iconfont"=>"&#xe632;"]
                ]
            ]
        ]
    ],
    [ "id"=>2,  "url"=>"", "name"=>"产品管理","iconfont"=>"&#xe631;","sub"=>[
            ["id"=>9,  "url"=>"product", "name"=>"产品列表","iconfont"=>"&#xe61a;","sub"=>[]],
            ["id"=>10,  "url"=>"brand", "name"=>"品牌管理","iconfont"=>"&#xe60d;","sub"=>[]],
            ["id"=>11,  "url"=>"product-cat", "name"=>"分类管理","iconfont"=>"&#xe610;","sub"=>[]]
        ]
    
    ],
    [ "id"=>3,  "url"=>"", "name"=>"会员管理","iconfont"=>"&#xe672;","sub"=>
        [
            ["id"=>12,  "url"=>"", "name"=>"会员管理","iconfont"=>"&#xe672;","sub"=>
                [
                    ["id"=>13,  "url"=>"user/index", "name"=>"会员列表","iconfont"=>"&#xe630;"],
                    ["id"=>14,  "url"=>"member-level", "name"=>"会员等级","iconfont"=>"&#xe60f;"],
                    ["id"=>15,  "url"=>"member-statistics", "name"=>"会员统计","iconfont"=>"&#xe74d;"]
                ]
            ]
        ]
    
    ],
    [ "id"=>4,  "url"=>"", "name"=>"网站设置","iconfont"=>"&#xe689;","sub"=>
        [
            ["id"=>16,  "url"=>"", "name"=>"系统管理","iconfont"=>"&#xe646;","sub"=>
                [
                    ["id"=>17,  "url"=>"config", "name"=>"系统设置","iconfont"=>"&#xe689;"],
                    ["id"=>18,  "url"=>"sys-log", "name"=>"系统日志","iconfont"=>"&#xe64a;"],
                    ["id"=>19,  "url"=>"menu", "name"=>"栏目管理","iconfont"=>"&#xe654;"],
                    ["id"=>20,  "url"=>"shielding", "name"=>"屏蔽词","iconfont"=>"&#xe654;"]
                ]
            ],
            ["id"=>21,  "url"=>"", "name"=>"权限管理","iconfont"=>"&#xe646;","sub"=>
                [
                    ["id"=>22,  "url"=>"admin-role", "name"=>"角色管理","iconfont"=>"&#xe689;"],
                    ["id"=>23,  "url"=>"admin-permission", "name"=>"权限设置","iconfont"=>"&#xe64a;"],
                    ["id"=>24,  "url"=>"admin", "name"=>"管理员","iconfont"=>"&#xe654;"]
                ]
            ]
        ]
        
    ]
];

$msg['data']['list'] = $menu;
$msg['status']=200;
echo header("content-type:text/html; charset=utf-8");
echo json_encode($msg);
