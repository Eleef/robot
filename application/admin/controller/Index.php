<?php
namespace app\admin\controller;
use app\admin\controller\Basic;

class Index extends Basic
{
    public function index()
    {
        $audition = db('audition')->order("id desc")->paginate(10);
        $this->assign([
            'audition'=>$audition,
        ]);

        $page = $audition->render();
        $this->assign('page', $page);
        return view();
    }
    public function index_name()
    {

        $joinin = db('join')->order("id desc")->paginate(10);
        $this->assign([
            'joinin'=>$joinin,
        ]);

        $page = $joinin->render();
        $this->assign('page', $page);
        return view();
    }
	public function auditiondel(){
        // echo input('id');
        $id=db('audition')->delete(input('id'));
        if ($id) {
            return $this->success("删除成功","./index");
        } else {
            return $this->error('删除失败');
        }
    }
	public function joinindel(){
        // echo input('id');
        $id=db('join')->delete(input('id'));
        if ($id) {
            return $this->success("删除成功","./index");
        } else {
            return $this->error('删除失败');
        }
    }
}
