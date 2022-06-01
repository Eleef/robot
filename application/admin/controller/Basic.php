<?php
namespace app\Admin\controller;
use think\Controller;

class Basic extends Controller
{
    //如果你的控制器类继承了\think\Controller类的话，可以定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。
    public function _initialize()
    {
        if(!session('name')){
            $this->error('请先登录',url('/admin/login'));
        }
    }
}