<?php
namespace app\admin\controller;
use app\admin\controller\Basic;

class Banner extends Basic
{
    public function index()
    {
        $banner = db('banner')->select();
        $this->assign([
            'banner' => $banner,
        ]);
        return view();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'image'=>input('image')
            ];

            if ($_FILES['image']['tmp_name']) {
                $data['image'] = $this->upload();
            }
            if(db('banner')->update($data)){
                $this->success("修改成功","./news");
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id=input('id');
        $banner = db('banner')->find($id);
        $this->assign('banner', $banner);
        return $this->fetch('edit');
    }
    public function add()
    { 
        if(request()->isPost()) {
            $data=input('post.');
            $data['time']=time();
            // dump($data['time']);exit;
            if ($_FILES['image']['tmp_name']) {
                // dump($data);
                $data['image'] = $this->upload();
            }
            $add = db('banner')->insert($data);
            
            if ($add) {
                return $this->success("添加成功","./banner");
            } else {
                return $this->error('添加失败');
            }
        }
        return view();
    }
    // 图片上传
    public function upload()
    {
        $file = request()->file('image');
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
         
            if ($info) {
                // 上传成功
                return str_replace('\\','/',$info->getSaveName());
            } else {
                // 上传失败
                echo $file->getError();
                die();
            }
        }
    }
    public function del(){
        // echo input('id');
        $id=db('banner')->delete(input('id'));
        if ($id) {
            return $this->success("删除成功","./banner");
        } else {
            return $this->error('删除失败');
        }
    }
}
