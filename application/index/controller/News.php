<?php
namespace app\index\controller;
use think\Controller;
class News extends Controller
{
    public function index()
    { 
        // 列表
        $r = db('industry')->count()+1;
        $industry = db('industry')->where('id','<',$r)->order("id desc")->paginate(7);
        $this->assign([
            'industry'=>$industry
        ]);
        


        $page = $industry->render();
        $this->assign('page', $page);

        $indiamge = db('industry')->limit(3)->order("id desc")->select();
        $this->assign('indiamge', $indiamge);

        return $this->fetch();
    }

    public function article()
    { 
        $id = input('id');
        $industry = db('industry')->find($id);
        $this->assign('industry',$industry);
        return $this->fetch('article');
    }
    
    public function industry()
    { // 列表
        $r = db('indus')->count()+1;

        $industry = db('indus')->where('id','<',$r)->order("id desc")->paginate(7);
        $this->assign([
            'industry'=>$industry
        ]);
        $page = $industry->render();
        $this->assign('page', $page);

        $indiamge = db('indus')->limit(3)->order("id desc")->select();
        $this->assign('indiamge', $indiamge);
        return $this->fetch('industry');
    }
    public function indusarticle()
    { // 列表
        $id = input('id');
        $industry = db('indus')->find($id);
        $this->assign('industry',$industry);
        return $this->fetch('indusarticle');
    }
}

