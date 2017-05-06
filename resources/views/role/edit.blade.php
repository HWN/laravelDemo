@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! Form::model($role, ['url' => ['role', $role->id], 'method' => 'PATCH','class'=>'layui-form layui-form-pane']) !!}
        @include('role.from')
        {!! Form::close() !!}
    </div>
@stop
@push('scripts')
    <script>
        layui.config({
            base: '{{ URL::asset('js') }}/'
        }).extend({
            jqform: 'jqmodules/jqform'
        }).use('role');
    </script>
@endpush