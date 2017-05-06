@extends('layouts.app_template')
@section('content')
    <div class="container-fluid larry-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!--头部搜索-->
                <section class="panel panel-padding">
                    <form class="layui-form" action="{{ url('user/getList') }}">
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
                        <button class="layui-btn layui-btn-small layui-btn-danger ajax-all" data-name="id"
                                data-params='{"url": "{{ url('permission/del') }}","data":"_token={{csrf_token()}}"}'>
                            <i class="iconfont">&#xe626;</i> 删除
                        </button>
                        {{--<button class="layui-btn layui-btn-small layui-btn-normal ajax-all" data-name="checkbox"--}}
                        {{--data-params='{"url": "{{ url('user/check') }}","data":"_token={{csrf_token()}}"}'>--}}
                        {{--<i class="layui-icon">&#x1005;</i> 审核--}}
                        {{--</button>--}}
                        <button class="layui-btn layui-btn-small modal-iframe"
                                data-params='{"content": "{{ url('permission/open') }}", "title": "添加会员","type":"1","shade":"true","area":"1000px,700px"}'>
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
            data-params='{"url":"{{ url('permission/getList') }}","pageid":"#page"}'>
        <table id="example" class="layui-table lay-even">
            <thead>
            <tr>
                <th width="30"><input type="checkbox" id="checkall" data-name="uid" lay-filter="check"
                                      lay-skin="primary"></th>
                <th width="60">序号</th>
                <th>名称</th>
                <th>路由名</th>
                <th>描述</th>
                <th width="120">添加时间</th>
                <th width="120">修改时间</th>
                <th width="240">操作</th>
            </tr>
            </thead>
            <tbody>
            @{{# layui.each(d, function(index, item){ }}
            <tr>
                <td><input type="checkbox" name="uid" value="@{{ item.id}}" lay-skin="primary"></td>
                <td>@{{ item.id}}</td>
                <td>
                    @{{# if(item.level==2){ }}
                    &nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;
                    @{{# } }}

                    @{{# if(item.level==3){ }}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;
                    @{{# } }}
                    @{{ item.display_name }}
                </td>
                <td>@{{ item.name }}</td>
                <td>@{{ item.description }}</td>
                <td>@{{ item.created_at }}</td>
                <td>@{{ item.updated_at }}</td>
                <td>
                    @{{# if(item.level<3){ }}
                    <button class="layui-btn layui-btn-mini layui-btn-normal modal-iframe"
                            data-params='{"content":"{{ url('permission/addChild') }}/@{{item.id}}","area":"500px,300px","title":"添加@{{ item.display_name}}的子分类","type":"1"}'>
                        <i class="iconfont">&#xe649;</i>添加子项
                    </button>
                    @{{# } }}
                    <button class="layui-btn layui-btn-mini modal-iframe"
                            data-params='{"content": "{{ url('permission/open') }}/@{{item.id}}", "title": "编辑@{{item.display_name}}","type":"1","shade":"true","area":"500px,300px"}'>
                        <i class="iconfont">&#xe653;</i>编辑
                    </button>
                    <button class="layui-btn layui-btn-mini layui-btn-danger ajax"
                            data-params='{"url": "{{ url('permission/del') }}","data":"id=@{{item.id}}&_token={{csrf_token()}}"}'>
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