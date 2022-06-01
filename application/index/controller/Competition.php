<?php

namespace app\index\controller;
use think\Db;
use think\Controller;

class Competition extends Controller
{
    public function index()
    {
        return view();
    }
    public function zhjn()
    {
        $id = input('id');
        $industry = db('competition')->where('id','=',3)->find();
        $this->assign('industry',$industry);
        return $this->fetch('zhjn');
    }

    public function wer()
    { 
        $id = input('id');
        $industry = db('competition')->where('id','=',2)->find();
        $this->assign('industry',$industry);
        return $this->fetch('wer');
    }


    public function vex()
    {
        $id = input('id');
        $industry = db('competition')->where('id','=',1)->find();
        $this->assign('industry',$industry);
        return $this->fetch('vex');
    }
    public function makex()
    {
        $id = input('id');
        $industry = db('competition')->where('id','=',5)->find();
        $this->assign('industry',$industry);
        return $this->fetch('makex');
    }
    public function fll()
    {
        $id = input('id');
        $industry = db('competition')->where('id','=',4)->find();
        $this->assign('industry',$industry);
        return $this->fetch('fll');
    }
    public function cys()
    {
        $id = input('id');
        $industry = db('competition')->where('id','=',4)->find();
        $this->assign('industry',$industry);
        return $this->fetch('cys');
    }
}