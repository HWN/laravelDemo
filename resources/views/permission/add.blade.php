@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! Form::open(['url' => 'permission', 'method' => 'POST','class'=>'layui-form layui-form-pane']) !!}
        {!! Form::text('fid', $fid, ['class' => 'form-control','hidden'=>'hidden']) !!}
        @include('permission.from')
        {!! Form::close() !!}
    </div>
@stop
@push('scripts')
    <script>
        layui.config({
            base: '{{ URL::asset('js/jqmodules') }}/'
        }).use('jqform');
    </script>
@endpush
