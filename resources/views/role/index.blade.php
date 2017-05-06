@extends('layouts.app_template')
@section('content')
    <div class="container-fluid larry-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!--头部搜索-->
                <section class="panel panel-padding">
                    <form class="layui-form" action="{{ url('role/getList') }}">
                        <div class="layui-form">
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <input class="layui-input" name="name" placeholder="姓名">
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
                        <button class="layui-btn layui-btn-small modal-iframe"
                                data-params='{"content": "{{ url('role/open') }}", "title": "添加会员","type":"1","shade":"true","area":"1000px,700px"}'>
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
@push('scripts')
    <script id="list-tpl" type="text/html"
            data-params='{"url":"{{ url('role/getList') }}","pageid":"#page"}'>
        <table id="example" class="layui-table lay-even">
            <thead>
            <tr>
                <th width="60">序号</th>
                <th>名称</th>
                <th>显示名</th>
                <th>描述</th>
                <th width="120">添加时间</th>
                <th width="120">修改时间</th>
                <th width="240">操作</th>
            </tr>
            </thead>
            <tbody>
            @{{# layui.each(d, function(index, item){ }}
            <tr>
                <td>@{{ item.id}}</td>
                <td>@{{ item.name }}</td>
                <td>@{{ item.display_name }}</td>
                <td>@{{ item.description }}</td>
                <td>@{{ item.created_at }}</td>
                <td>@{{ item.updated_at }}</td>
                <td>
                    <button class="layui-btn layui-btn-mini modal-iframe"
                            data-params='{"content": "{{ url('role/open') }}/@{{item.id}}", "title": "编辑@{{item.display_name}}","type":"1","shade":"true","area":"1000px,700px"}'>
                        <i class="iconfont">&#xe653;</i>编辑
                    </button>
                    <button class="layui-btn layui-btn-mini layui-btn-danger ajax"
                            data-params='{"url": "{{ url('role/del') }}","data":"id=@{{item.id}}&_token={{csrf_token()}}"}'>
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
@endpush