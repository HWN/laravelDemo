@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! Form::open(['url' => 'user', 'method' => 'POST','class'=>'layui-form layui-form-pane']) !!}
        @include('user.from')

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