<?php
namespace app\mobile\validate;
use think\Validate;

class Joinin extends Validate
{
    protected $rule = [
        'jo_name'  => 'require',
        'jo_phone' => ['require','regex'=>'/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|16[6]|(17[0,3,5-8])|(18[0-9])|19[89])\d{8}$/'],
    ];
    protected $message  =   [
        'jo_name.require' => '请输入姓名',
        'jo_phone.require' => '请输入手机号',
        'jo_phone' => '请输入正确手机格式',
    ];
}
?>