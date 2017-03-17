<div class="layui-form-item">
    {!! Form::label('name', '姓名', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::text('name', null, [0=>'sda','class' => 'layui-input','required'=>'required','jq-verify'=>'required','jq-error'=>'请输入姓名','jq-url'=>'/php/check.php','placeholder'=>'请输入姓名','autocomplete'=>'off','jj']) !!}
    </div>
</div>
<div class="layui-form-item">
    {!! Form::label('phone', '手机', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::text('phone', '', ['class' => 'layui-input','jq-verify'=>'phone','jq-error'=>'手机号码格式不对','placeholder'=>'请输入手机号码','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="layui-form-item">
    {!! Form::label('email', '邮箱', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::email('email', null, ['class' => 'layui-input','jq-verify'=>'email','jq-error'=>'邮箱格式不对','placeholder'=>'请输入邮箱','autocomplete'=>'off','required'=>'required']) !!}
    </div>
</div>
<div class="layui-form-item">
    {!! Form::label('sex', '性别', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::radio('sex', '1', null,  ['title'=>'男','checked' => 'checked']) !!}
        {!! Form::radio('sex', '0', null,  ['title'=>'女']) !!}
        {!! Form::radio('sex', '2', null,  ['title'=>'保密']) !!}
    </div>
</div>

<div class="layui-form-item">
    {!! Form::label('status', '状态', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-inline">
        {!! Form::radio('status', '1', null,  ['title'=>'启用','checked' => 'checked']) !!}
        {!! Form::radio('status', '0', null,  ['title'=>'启用']) !!}
    </div>
</div>
<div class="layui-form-item layui-form-text">
    {!! Form::label('remark', '备注', ['class' => 'layui-form-label']) !!}
    <div class="layui-input-block">
        {!! Form::textarea('remark', '', ['class' => 'layui-textarea','placeholder'=>'请输入内容']) !!}
    </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
        {!! Form::submit('立即提交', ['class' => 'layui-btn','jq-submit'=>'jq-submit']) !!}
        {{--<button class="layui-btn" jq-submit jq-filter="submit">立即提交</button>--}}
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
</div>