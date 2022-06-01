<?php
namespace app\admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
	}
	public function login()
    {
	
		$data = input('post.');
		// 验证用户名
		$result = db('user')->where('name',$data['name'])->find();
	

		if($result){
			if($result['password'] === $data['password']){
				session('name',$data['name']);
			}else{
				$this->error('密码错误');
			}
		}else{
			$this->error('用户名不存在');
			exit;
		}
		$this->success("登录成功",'/admin');
		
	}
	public function logout(){
       $ret = session(null);//退出清空session
        $this->success('退出成功',url('/admin/login'));//跳转到登录页面
    }
	
}
