<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller
{
    public function lst()
    {
        $admin = new AdminModel();
        $adminres = $admin->getadmin();
        $this->assign('adminres',$adminres);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $admin = new AdminModel();
            $res = $admin->addadmin($data);
            if ($res) {
                $this->success('添加管理员成功',url('lst'));
            } else {
                $this->error('添加管理员失败');
            }

        }
        return view();
    }

    public function edit($id)
    {
        return view();
    }
}
