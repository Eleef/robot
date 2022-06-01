<?php

namespace app\admin\controller;

use app\admin\controller\Basic;

class Newsindus extends Basic
{
    public function index()
    {
        $industry = db('indus')->paginate(10);
        $this->assign([
            'industry' => $industry,
        ]);

        $page = $industry->render();
        $this->assign('page', $page);

        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['time']=time();
            if ($_FILES['image']['tmp_name']) {
                $data['image'] = $this->upload();
            }
            $add = db('indus')->insert($data);

            if ($add) {
                return $this->success("添加成功", "./newsindus");
            } else {
                return $this->error('添加失败');
            }
        }
        return view();
    }
    public function del(){
        $id=db('indus')->delete(input('id'));
        if ($id) {
            return $this->success("删除成功","./newsindus");
        } else {
            return $this->error('删除失败');
        }
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
                echo $file->getError("");
                die();
            }
        }
    }
    public function edit(){
        $id=input('id');
        if(is_numeric($id)){
            // return var_dump(is_numeric($id));
            if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'content'=>input('content'),
                // 'description'=>input('description'),
                'image'=>input('image')
            ];
            $img = input('img');
            if ($_FILES['image']['tmp_name']) {
                $data['image'] = $this->upload();
            }else{
                $data['image'] =$img;
            }

            if(db('indus')->update($data)){
                $this->success("修改成功","./newsindus");
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id=input('id');
        $industry = db('indus')->find($id);
        $this->assign('industry', $industry);
        return $this->fetch('edit');
    }else{
        if (request()->isPost()) {
            $data = input('post.');
            $data['time']=time();
            if ($_FILES['image']['tmp_name']) {
                $data['image'] = $this->upload();
            }
            $add = db('indus')->insert($data);

            if ($add) {
                return $this->success("添加成功", "./newsindus");
            } else {
                return $this->error('添加失败');
            }
        }
        // return view();
        return $this->fetch('add');
    }
        
        
    }
}
