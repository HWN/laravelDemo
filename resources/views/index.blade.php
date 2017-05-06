@extends('layouts.app_template')
@section('title','管理')
@section('content')
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header header">
            <!-- logo区域 -->
            <div class="jqadmin-logo-box">
                <a class="logo" href="http://jqadmin.jqcool.net" title="jQAdmin"><img
                            src="{{ URL::asset('img/logo.png') }}" alt=""></a>
                <div class="menu-type" data-type="2"><i class="iconfont">&#xe61a;</i></div>
            </div>

            <!-- 主菜单区域 -->
            <div class="jqadmin-main-menu">
                <ul class="layui-nav clearfix" id="menu" lay-filter="main-menu">

                </ul>

            </div>

            <!-- 头部右侧导航 -->
            <div class="header-right">
                <button type="button" class="layui-btn  layui-btn-small my-tips"
                        style="position: absolute; top: 14px; right:220px;"><i class="iconfont">&#xe60c;</i> 打赏作者
                </button>
                <ul class="layui-nav jqadmin-header-item right-menu">
                    <li class="layui-nav-item first">
                        <a href="javascript:;">
                            <cite> admin</cite>
                            <span class="layui-nav-more"></span>
                        </a>

                        <dl class="layui-nav-child">
                            <dd class="tab-menu">
                                <a href="javascript:;" data-url="user-info.html" data-title="个人信息"> <i class="iconfont "
                                                                                                       data-icon='&#xe672;'>
                                        &#xe672; </i><span>个人信息</span></a>
                            </dd>
                            <dd>
                                <a href=""><i class="iconfont ">&#xe64b; </i>退出</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item tab-menu"><a class="msg" href="javascript:;" data-url="msg.html"
                                                           data-title="站内信息"><i class="iconfont" data-icon='&#xe63c;'>
                                &#xe63c; </i><span class="msg-num">1</span></a></li>
                </ul>
                <button title="刷新" class="layui-btn layui-btn-normal fresh-btn"><i class="iconfont">&#xe62e; </i>
                </button>
            </div>
        </div>

        <!-- 左侧导航-->
        <div class="layui-side jqamdin-left-bar">
            <!--子菜单项-->
            <p class="jqadmin-home tab-menu">
                <a href="javascript:;" data-url="welcome.html" data-title="后台首页">
                    <i class="iconfont" data-icon='&#xe600;'>&#xe600;</i>
                    <span>后台首页</span>
                </a>
            </p>
            <div id="submenu"></div>
        </div>

        <!-- 左侧侧边导航结束 -->
        <!-- 右侧主体内容 -->
        <div class="layui-body jqadmin-body" id="jqadmin-body">

            <div class="layui-tab layui-tab-card jqadmin-tab-box" id="jqadmin-tab" lay-filter="tabmenu"
                 lay-allowclose="false" lay-notAuto="true">
                <ul class="layui-tab-title">
                    <li class="layui-this" id="admin-home"><i class="iconfont">&#xe600;</i><em>后台首页</em></li>

                </ul>
                <div class="tab-move-btn">
                    <span class="move-left-btn"><i class="iconfont">&#xe616;</i></span>
                    <span class="move-right-btn"><i class="iconfont ">&#xe618;</i></span>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe class="jqadmin-iframe" data-id='0' src="{{ url('welcome') }}"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- 底部区域 -->
        <div class="layui-footer jqadmin-foot" id="jqadmin-footer">
            <div class="layui-mian">

                <p class="jqadmin-copyright">
                    <span>2017 &copy;</span> Write by Paco,<a href="http://www.jqcool.net">jQAdmin</a>. 版权所有 依赖前端框架layui
                </p>
                <div class="jqadmin-author">
                    jQAdmin QQ群：114747233 查看:
                    <a href="http://paco.jqcool.net" title="">作者信息</a>
                </div>
            </div>
        </div>
    </div>
    <div class="my-tip">
        <img src="{{ URL::asset('img/my-tip.jpg') }}" alt=""/>
    </div>
@stop
@push('scripts')
    <script id="menu-tpl" type="text/html"
            data-params='{"url":"{{ URL::asset('data/menu.php') }}","listid":"menu","icon":"true"}'>
        @verbatim
        {{#  layui.each(d.list, function(index, item){ }}
        <li class="layui-nav-item {{# if(index==0){ }}layui-this{{# } }}">
            <a href="javascript:;" data-title="{{item.name}}"><i
                        class="iconfont">{{item.iconfont}}</i><span>{{item.name}}</span></a>
        </li>
        {{# }); }}
        @endverbatim
    </script>
    @verbatim
    <script id="submenu-tpl" type="text/html">
        {{# layui.each(d.list, function(index, menu){ }}
        <div class="sub-menu">
            <ul class="layui-nav layui-nav-tree">
                {{# layui.each(menu.sub, function(index, submenu){ }} {{# if(submenu.sub && submenu.sub.length>0){ }}
                <li class="layui-nav-item" data-bind="0">
                    <a href="javascript:;" data-title="{{submenu.name}}">
                        <i class="iconfont">{{submenu.iconfont}}</i>
                        <span>{{submenu.name}}</span>
                        <em class="layui-nav-more"></em>
                    </a>
                    <dl class="layui-nav-child">
                        {{# layui.each(submenu.sub, function(index, secMenu){ }}
                        <dd>
                            <a href="javascript:;" data-url="{{secMenu.url}}" data-title="{{secMenu.name}}">
                                <i class="iconfont " data-icon='{{secMenu.iconfont}}'>{{secMenu.iconfont}}</i>
                                <span>{{secMenu.name}}</span>
                            </a>
                        </dd>
                        {{# }); }}
                    </dl>
                </li>
                {{# }else{ }}
                <li class="layui-nav-item">
                    <a href="javascript:;" data-url="{{submenu.url}}" data-title="{{submenu.name}}">
                        <i class="iconfont" data-icon='{{submenu.iconfont}}'>{{submenu.iconfont}}</i>
                        <span>{{submenu.name}}</span>
                    </a>
                </li>
                {{# } }} {{# }); }}
            </ul>
        </div>
        {{# }); }}
    </script>
    @endverbatim
@endpush
@push('scripts')
    <script>
        layui.config({
            base: '{{ URL::asset('js') }}/'
        }).extend({
            elem: 'jqmodules/elem',
            tabmenu: 'jqmodules/tabmenu',
            jqmenu: 'jqmodules/jqmenu'
        }).use('index');
    </script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?9e99ae60a18de5e3860d7bfffc86a85d";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
@endpush
