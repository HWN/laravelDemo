@extends('layouts.app_template')
@section('title','首页')
@section('content')
<body>
    <div class="container-fluid larry-wrapper">
        <!--顶部统计数据预览 -->
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-blue"> <i class="iconfont">&#xe672;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>用户总量</p>
                    </div>
                </section>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-commred"> <i class="iconfont">&#xe674;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>今日注册</p>
                    </div>
                </section>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-dark-green"> <i class="iconfont">&#xe6bc;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>文章总数</p>
                    </div>
                </section>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-yellow-green"> <i class="iconfont">&#xe649;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>今日新增</p>
                    </div>
                </section>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-orange"> <i class="iconfont">&#xe638;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>评论总数</p>
                    </div>
                </section>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
                <section class="panel">
                    <div class="symbol bgcolor-yellow"> <i class="iconfont">&#xe669;</i>
                    </div>
                    <div class="value">
                        <a href="#">
                            <h1>10</h1>
                        </a>
                        <p>今日评论</p>
                    </div>
                </section>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <section class="panel">
                    <div class="panel-heading">
                        网站信息
                        <a href="javascript:;" class="pull-right panel-toggle"><i class="iconfont">&#xe604;</i></a>
                    </div>
                    <div class="panel-body">
                        <table class="layui-table">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>软件名称</strong>：

                                    </td>
                                    <td>
                                        <a href="http://jqadmin.jqcool.net">jqadmin后台模板</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>软件版本</strong>：

                                    </td>
                                    <td>
                                        V1.1.0 2017-03-12
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>开发作者</strong>：

                                    </td>
                                    <td>Paco</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>软件官网</strong>：
                                    </td>
                                    <td>
                                        <a href="http://jqadmin.jqcool.net" target="_blank">jqadmin</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>模板下载</strong>：
                                    </td>
                                    <td><a href="https://git.oschina.net/jqcool/jqadmin" target="_blank" class="layui-btn layui-btn-small">码云下载</a> <a href="http://fly.layui.com/case/2017/" target="_blank" class="layui-btn layui-btn-small layui-btn-danger">我要点赞</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>QQ讨论群</strong>：
                                    </td>
                                    <td>
                                        <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=bb0dbfcf87d269f825807a1ba7ff6a1c09d07b98b724192ed325e840284b4821"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="jQ酷" title="jQ酷"></a> 入群答案：jqadmin</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>服务器环境</strong>：
                                    </td>
                                    <td>windows</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-heading">
                        数据统计
                        <a href="javascript:;" class="pull-right panel-toggle"><i class="iconfont">&#xe604;</i></a>
                    </div>
                    <div class="panel-body">
                        <div class="echarts" id="echarts"></div>
                    </div>
                </section>
            </div>


            <div class="col-xs-12 col-md-6">
                <section class="panel">
                    <div class="panel-heading">
                        最新文章
                        <a href="javascript:;" class="pull-right panel-toggle"><i class="iconfont">&#xe604;</i></a>
                    </div>
                    <div class="panel-body">
                        <table class="layui-table" lay-even>
                            <colgroup>
                                <col>
                                <col width="100">
                                <col width="120">
                                <col width="80">
                                <col width="150">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>作者</th>
                                    <th>时间</th>
                                    <th>审核</th>
                                    <th>操作</th>

                                </tr>
                            </thead>
                            <tbody class="layui-form">
                                <tr>
                                    <td>人生就像是一场修行</td>
                                    <td>Paco</td>
                                    <td>2016-11-29</td>
                                    <td>
                                        <input type="checkbox" name="close" lay-text="ON|OFF" lay-skin="switch" lay-filter="ajax" data-params='{"url":"/php/success.php","loading":"false"}'>
                                    </td>

                                    <td>
                                        <button class="layui-btn layui-btn-mini modal-full" data-params='{"content":"add-article.html","title":"编辑文章"}'>
                                            <i class="iconfont">&#xe653;</i>编辑
                                        </button>
                                        <button class="layui-btn layui-btn-mini layui-btn-danger ajax" data-params='{"url":"/php/test.php","data":"id=1&name=jqcool"}'>
                                            <i class="iconfont">&#xe626;</i>删除
                                        </button></td>
                                </tr>
                                <tr>
                                    <td>人生就像是一场修行</td>
                                    <td>Paco</td>
                                    <td>2016-11-29</td>
                                    <td>
                                        <input type="checkbox" name="close" lay-skin="switch">
                                    </td>
                                    <td>
                                        <button class="layui-btn layui-btn-mini modal-catch" data-params='{"content":".testcatch","title":"编辑人生就像是一场修行","type":"1"}'>
                                            <i class="iconfont">&#xe653;</i>编辑
                                        </button>
                                        <button class="layui-btn layui-btn-mini layui-btn-danger">
                                            <i class="iconfont">&#xe626;</i>删除
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="panel log">
                    <div class="panel-heading">
                        更新日志
                        <a href="javascript:;" class="pull-right panel-toggle"><i class="iconfont">&#xe604;</i></a>
                    </div>
                    <div class="panel-body">
                        <h2>jQadmin后台模板v1.1.1 2017-03-13 </h2>
                        <ul>
                            <li>修正火狐下表格无边框的BUG</li>
                            <li>修正打开菜单过来无滚动BUG</li>
                            <li>ajax返回自己定义方法complete添加$参数,实际为funtion(ret, options, $)</li>
                        </ul>

                        <h2>jQadmin后台模板v1.1.0 2017-03-12 </h2>
                        <ul>
                            <li>本次更新有点大，所以直接为1.1.0，主要更新index.html页面，有BUG请加QQ群反馈，谢谢</li>
                            <li>更新菜单的显示样式，有三种切换模式，自己点击体验</li>
                            <li>更新菜单数据从服务端获取，服务端返回json数便可自动渲染，更多请看码云的文档</li>
                        </ul>
                        <h2>jQadmin后台模板v1.0.3 2017-03-11 </h2>
                        <ul>
                            <li>修复非iframe模式下弹窗表单提交后返window.name错误</li>
                            <li>添加switch状态选中判断</li>
                        </ul>
                        <h2>jQadmin后台模板v1.0.2 2017-03-10 </h2>
                        <ul>
                            <li>修复IE上的bug</li>
                            <li>增加异步操作时弹出确认窗口，在data-params属中配置confirm:true即可</li>
                            <li>修复ajax出现pending状态，拖慢渲染的错误</li>
                            <li>更新layui为github版本，原因为压缩版与最新版本不同步引起的一些错误</li>
                        </ul>
                        <h2>jQadmin后台模板v1.0.1 2017-03-09 </h2>
                        <ul>
                            <li>修正菜单TAB开关设置失效错误</li>
                            <li>修正列表页刷新后跳回第一页的BUG</li>
                            <li>修正异步提交富文本框内容为空的BUG</li>
                        </ul>
                        <h2>jQadmin后台模板v1.0.0 2017-03-07 </h2>
                        <p>一款由JQ酷为了省时间而打造的后台管理模板，封装了常用的JS方法，使得你可以写更少甚至不写js代码就可以完成整个后台的搭建。模板使用了layui，模块化开发，本套模板是按着本人这些年来的习惯编写，也为方便以后搭建项目的便捷而编写，当然，本人的能力是有限的，模板中难免会存在体验不好、BUG或是错误，欢迎朋友们提出，或是同为这份开源免费的模板做份做贡献。</p>

                        <h2>模板特点</h2>
                        <ul>
                            <li>模块化开发</li>
                            <li>封装了AJAX</li>
                            <li>封装了弹出窗口</li>
                            <li>封装了表单验证（异步验证没有，想不好到的方法，有好方法的同学请告诉下）</li>
                            <li>封装了列表（使用了layui的模板引擎）</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>更多帮助文档请移步到<a href="https://git.oschina.net/jqcool/jqadmin" target="_blank" class="layui-btn layui-btn-small">码云git</a></p>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="testcatch" style="display: none;">
        <p>这是一个捕获弹窗</p>
    </div>
</body>
@stop
@push('scripts')
    <script>
        layui.config({
            base: '{{ URL::asset('js') }}/'
        }).extend({
            echarts: 'lib/echarts',
            ajax: 'jqmodules/ajax',
            modal: 'jqmodules/modal'
        }).use(['main', 'echart']);
    </script>
@endpush