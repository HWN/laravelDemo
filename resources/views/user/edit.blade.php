@extends('layouts.app_template')
@section('content')
    <div class="add-subcat" style="display: block">
        {!! dump(\Illuminate\Support\Facades\Input::get('uid')) !!}
        {!! Form::model($user, ['url' => ['user', $user->id], 'method' => 'PATCH','class'=>'layui-form layui-form-pane']) !!}
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
