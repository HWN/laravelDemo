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
<div class="layui-form-item permission-list">
    <label class="layui-form-label">拥有权限</label>
    <div class="layui-input-block">
        <ul>
            <li>
                {!! Form::checkbox('perm[]', 0, true,  ['title'=>'控制台','lay-filter' => 'role','required'=>'required']) !!}
            </li>
            @foreach ($permissions as $permission)
                <li>
                    {!! Form::checkbox('perm[]', $permission['id'], in_array($permission['id'],$role_perms)?true:false,  ['title'=>$permission['display_name'],'lay-filter' => 'role','required'=>'required']) !!}
                    @if (isset($permission['children']))
                        @foreach ($permission['children'] as $children)
                            <dl>
                                {!! Form::checkbox('perm[]', $children['id'], in_array($children['id'],$role_perms)?true:false,  ['title'=>$children['display_name'],'lay-filter' => 'role','required'=>'required']) !!}
                                @if (isset($children['children']))
                                    @foreach ($children['children'] as $children_1)
                                        <dd>
                                            {!! Form::checkbox('perm[]', $children_1['id'], in_array($children_1['id'],$role_perms)?true:false,  ['title'=>$children_1['display_name'],'lay-filter' => 'role','required'=>'required']) !!}
                                        </dd>
                                    @endforeach
                                @endif
                            </dl>
                        @endforeach
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
        {!! Form::submit('立即提交', ['class' => 'layui-btn','jq-submit'=>'jq-submit']) !!}
        {{--<button class="layui-btn" jq-submit jq-filter="submit">立即提交</button>--}}
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
</div>