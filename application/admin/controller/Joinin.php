<?php
namespace app\admin\controller;
use app\admin\controller\Basic;

class Joinin extends Basic
{
    public function index()
    {
        $from = db('from')->select();
        $this->assign([
            'from'=>$from,
        ]);
		
		$city = db('city')->select();
        $this->assign([
            'city'=>$city,
        ]);
		
		
        return view();
    }
}
