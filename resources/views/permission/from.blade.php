
<div class="layui-form-item">
    {!! Form::label('name', '名称', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::text('name', null, ['class' => 'layui-input','required'=>'required','jq-verify'=>'required','jq-error'=>'请输入路径名称','placeholder'=>'请输入姓名','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="layui-form-item">
    {!! Form::label('display_name', '显示名称', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::text('display_name', null, ['class' => 'layui-input','required'=>'required','jq-verify'=>'required','jq-error'=>'请输入显示名称','placeholder'=>'请输入显示名称','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="layui-form-item">
    {!! Form::label('description', '说明', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::email('description', null, ['class' => 'layui-input','placeholder'=>'请输入说明','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
        {!! Form::submit('立即提交', ['class' => 'layui-btn','jq-submit'=>'jq-submit']) !!}
        {{--<button class="layui-btn" jq-submit jq-filter="submit">立即提交</button>--}}
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
</div>