<?php

namespace app\index\controller;

use think\Controller;

class About extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $data=input('post.');
			
            $validate = validate('Form');
            if(!$validate->check($data)){
                $msg=$validate->getError();
                return json(['error'=>2,'msg'=>$msg]);
            }
            $add=db('from')->insert($data);
            if($add){
				sendEmails([['user_email'=>'liaohaiyan@haihong108.onaliyun.com','user_email2'=>'liumengjie@haihong108.onaliyun.com','user_email3'=>'moyongyi@haihong108.onaliyun.com','user_email4'=>'chensaihu@haihong108.onaliyun.com','user_email5'=>'kuangwenjun@haihong108.onaliyun.com','user_email6'=>'chensaihu@haihong108.onaliyun.com']]);
				return json(['error'=>0,'msg'=>'提交成功！']);
            }else{
                return json(['error'=>1,'msg'=>'提交失败，请重新添加！']);
            }
            return false;
        }
        return view();
    }
}