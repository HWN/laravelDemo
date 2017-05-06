@extends('layouts.app_template')
@section('content')
    <div class="container-fluid larry-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!--头部搜索-->
                <section class="panel panel-padding">
                    <form class="layui-form" action="/php/data.php">
                        <div class="layui-form">
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <input class="layui-input start-date" name="start_date" placeholder="注册时间">
                                </div>
                                <div class="layui-input-inline">
                                    <input class="layui-input end-date" name="end_date" placeholder="注册时间">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <input class="layui-input" name="keyword" placeholder="关键字">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <button lay-submit class="layui-btn" lay-filter="search">查找</button>
                            </div>
                        </div>
                    </form>
                </section>

                <!--列表-->
                <section class="panel panel-padding">
                    <div class="group-button">
                        <button class="layui-btn layui-btn-small layui-btn-danger ajax-all" data-name="uid"
                                data-params='{"url": "{{ url('user/del') }}","data":"_token={{csrf_token()}}"}'>
                            <i class="iconfont">&#xe626;</i> 删除
                        </button>
                        {{--<button class="layui-btn layui-btn-small layui-btn-normal ajax-all" data-name="checkbox"--}}
                        {{--data-params='{"url": "{{ url('user/check') }}","data":"_token={{csrf_token()}}"}'>--}}
                        {{--<i class="layui-icon">&#x1005;</i> 审核--}}
                        {{--</button>--}}
                        <button class="layui-btn layui-btn-small modal-iframe"
                                data-params='{"content": "{{ url('user/open') }}", "title": "添加会员","type":"1","shade":"true","area":"1000px,700px"}'>
                            <i class="iconfont">&#xe649;</i> 添加
                        </button>
                    </div>
                    <div id="list" class="layui-form">
                    </div>
                    <div class="text-right" id="page"></div>
                </section>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script id="list-tpl" type="text/html" data-params='{"url":"{{ url('article/getList') }}","pageid":"#page"}'>
        <table id="example" class="layui-table lay-even">
            <thead>
            <tr>
                <th width="30"><input type="checkbox" id="checkall" data-name="uid" lay-filter="check"
                                      lay-skin="primary"></th>
                <th width="60">序号</th>
                <th width="100">图标</th>
                <th>标题</th>
                <th>内容</th>
                <th width="70">发布时间</th>
                <th width="142">操作</th>
            </tr>
            </thead>
            <tbody>
            @{{# layui.each(d, function(index, item){ }}
            <tr>
                <td><input type="checkbox" name="uid" value="@{{ item.id}}" lay-skin="primary"></td>
                <td>@{{ item.id}}</td>
                <td>
                    <img src="@{{ item.logo}}" alt="..." class="img-thumbnail">
                </td>
                <td>@{{ item.title }}</td>
                <td>@{{ item.content }}</td>
                <td>@{{ item.publish_at }}</td>
                <td>
                    <button class="layui-btn layui-btn-mini modal-iframe"
                            data-params='{"content": "{{ url('user/open') }}/@{{item.id}}", "title": "编辑@{{item.name}}","type":"1","shade":"true","area":"1000px,700px"}'>
                        <i class="iconfont">&#xe653;</i>编辑
                    </button>
                    <button class="layui-btn layui-btn-mini layui-btn-danger ajax"
                            data-params='{"url": "{{ url('user/del') }}","data":"uid=@{{item.id}}&_token={{csrf_token()}}"}'>
                        <i class="iconfont">&#xe626;</i>删除
                    </button>
                </td>
                </td>
            </tr>
            @{{# }); }}
            </tbody>
        </table>
    </script>
    <script>
        layui.config({
            base: '{{ URL::asset('js') }}/'
        }).extend({
            dtable: 'jqmodules/dtable',
            ajax: 'jqmodules/ajax',
            jqdate: 'jqmodules/jqdate',
            jqform: 'jqmodules/jqform',
            modal: 'jqmodules/modal',
        }).use('list');
    </script>
@stop