@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! Form::open(['url' => 'role', 'method' => 'POST','class'=>'layui-form layui-form-pane']) !!}
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
