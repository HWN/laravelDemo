@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! Form::model($user, ['url' => ['user.update', $user->id], 'method' => 'post','class'=>'layui-form layui-form-pane']) !!}
        @include('user.from')
        {!! Form::close() !!}
    </div>
@stop
@section('script')
    <script>
        layui.config({
            base: '{{ URL::asset('js/jqmodules') }}/'
        }).use('jqform');
    </script>
@stop
