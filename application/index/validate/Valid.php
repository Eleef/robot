<?php
namespace app\index\validate;
use think\Validate;

class Valid extends Validate
{
    protected $rule = [
        'c_phone'  => ['require','unique:audition','regex'=>'/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|16[6]|(17[0,3,5-8])|(18[0-9])|19[89])\d{8}$/'],
        'c_name' => 'require',
        'c_age' => 'require|number|between:1,18',
    ];
    protected $message  =   [
        'c_phone.require' => '请输入手机号',
        'c_phone.unique' => '手机号已存在',
        'c_phone' => '请输入正确手机格式',
        'c_name.require' => '请输入孩子姓名',
        'c_age.require' => '请输入孩子年龄',
        'c_age.between' => '年龄需在1-18岁',
        'c_age.number' => '请输入正确年龄',
    ];
    protected $scene = [
        'add'  =>  ['c_phone'],
        'edit' =>  ['c_phone'=>'require|unique'],
    ];
}
?>