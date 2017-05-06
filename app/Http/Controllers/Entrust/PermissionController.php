<?php

namespace App\Http\Controllers\Entrust;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permission.index', compact('permissions'));
    }

    public function getList()
    {
        $list = Permission::get()->toArray();
        $new_list = $this->getMenu($list);
        $permissions = [];

        foreach ($new_list as $item) {
            $new_item = $item;
            unset($new_item['children']);
            $new_item['level'] = 1;
            $permissions[] = $new_item;
            if (isset($item['children'])) {
                foreach ($item['children'] as $item_1) {
                    $new_item = $item_1;
                    unset($new_item['children']);
                    $new_item['level'] = 2;
                    $permissions[] = $new_item;
                    if (isset($item_1['children'])) {
                        foreach ($item_1['children'] as $item_1_1) {
                            unset($item_1_1['children']);
                            $item_1_1['level'] = 3;
                            $permissions[] = $item_1_1;
                        }
                    }
                }
            }
        }
        $msg['status'] = 200;
        $msg['data'] = $permissions;
        return $msg;
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
    protected function getMenu($items, $id = 'id', $pid = 'fid', $son = 'children')
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

    public function openFrom($id = null)
    {
        if (is_null($id)) {
            $fid = 0;
            return view('permission.add', compact('fid'));
        } else {
            $permission = Permission::findOrFail($id);
            return view('permission.edit', compact('permission'));
        }
    }

    public function addChild($fid)
    {
        if (is_null($fid)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return view('permission.add', compact('fid'));
        }
    }

    public function add(Request $request)
    {
        $input = $request->all();
        $res = Permission::create($input);
        if ($res) {
            return $this->apiJson(200, '成功', '', url('permission'));
        } else {
            return $this->apiJson(0, '出错啦');
        }
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $res = $permission->update($request->all());
        if ($res) {
            return $this->apiJson(200, '成功', '', url('permission'));
        } else {
            return $this->apiJson(0, '出错啦');
        }
    }

    public function del(Request $request)
    {
        $del = $request->all();
        if (!isset($del['id'])) {
            return $this->apiJson(0, '参数错误');
        }
        $ids = explode(',', $del['id']);
        $res = Permission::destroy($ids);
        if (empty($res)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return $this->apiJson(200, '成功', '', url('permission'));
        }
    }
}
