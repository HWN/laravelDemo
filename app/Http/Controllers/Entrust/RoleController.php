<?php

namespace App\Http\Controllers\Entrust;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('role.index');
    }

    public function getList(Request $request)
    {
        $name = $request->input('name');
        $role = new Role();
        $map = [];
        if ($name != '') {
            $map[] = ['name', 'like', '%' . $name . '%'];
        }
        $roles = $role->where($map)->orderBy('created_at', 'desc')->paginate(5);
        $msg['status'] = 200;
        $msg['data'] = $roles->items();
        $msg['pages'] = ($roles->total() % 5) == 0 ? $roles->total() / 5 : intval($roles->total() / 5) + 1;

        return $msg;
    }

    public function openFrom($id = null)
    {
        $list = Permission::get()->toArray();
        $permissions = $this->getPermission($list);
        if (is_null($id)) {
            $role_perms = [];
            return view('role.add', compact('permissions', 'role_perms'));
        } else {
            $role = Role::findOrFail($id);
            $role_perms = $role->perms()->pluck('id')->toArray();
            return view('role.edit', compact('role', 'permissions', 'role_perms'));
        }
    }

    /**
     * 组装分级菜单
     *
     * @param array  $items 菜单节点
     * @param string $id
     * @param string $pid
     * @param string $son
     *
     * @return array
     */
    protected function getPermission($items, $id = 'id', $pid = 'fid', $son = 'children')
    {
        $tree = array();
        $tmpMap = array();

        foreach ($items as $item) {
            $tmpMap[$item[$id]] = $item;
        }

        foreach ($items as $item) {
            if (isset($tmpMap[$item[$pid]])) {
                $tmpMap[$item[$pid]][$son][] = &$tmpMap[$item[$id]];
            } else {
                $tree[] = &$tmpMap[$item[$id]];
            }
        }
        return $tree;
    }

    public function add(Request $request)
    {
        $input = $request->all();
        $role = Role::create($input);
        $role->perms()->sync($input['perm']);
        if ($role) {
            return $this->apiJson(200, '成功', '', url('role'));
        } else {
            return $this->apiJson(0, '出错啦');
        }
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $role = Role::findOrFail($id);
        $res = $role->update($input);
        $role->perms()->sync($input['perm']);
        if ($res) {
            return $this->apiJson(200, '成功', '', url('role'));
        } else {
            return $this->apiJson(0, '出错啦');
        }
    }

    public function del(Request $request)
    {
        $input = $request->all();
        if (!isset($input['id'])) {
            return $this->apiJson(0, '参数错误');
        }
        $role = Role::findOrFail($input['id']);
//        $role->delete();
        //        $res = $role->forceDelete();
        if (empty($res)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return $this->apiJson(200, '成功', '', url('role'));
        }
    }
}
