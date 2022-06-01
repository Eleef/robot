<?php

namespace app\index\controller;
use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        // 提交表单
        if (request()->isPost()) {
            $data = input('post.');
            $data['c_time']=time();
            // 手机验证
            $validate = \think\Loader::validate('Valid');

            if(!$validate->check($data)){
               $this->error($validate->getError());
            }
            $add = db('audition')->insert($data); //写入
			
            if ($add) {
             sendEmail([['user_email'=>'liaohaiyan@haihong108.onaliyun.com','user_email2'=>'liumengjie@haihong108.onaliyun.com','user_email3'=>'moyongyi@haihong108.onaliyun.com','user_email4'=>'chensaihu@haihong108.onaliyun.com']]);
			   $this->success('感谢您的支持！');
				
            } else {
                $this->error('提交失败！');
            };
			
        }
        // 轮播图
        $banner = db('banner')->select();
        $this->assign([
            'banner' => $banner,
        ]);

      $html = $this->fetch('index');
      file_put_contents('./index.html',$html);
      return $this->fetch('index');
    }
        //轮播
	public function banner()
    {
       $list = db('banner')->select();
        $json = json_encode($list);
        echo $json;
    }

}