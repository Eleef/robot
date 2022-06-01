<?php
namespace app\index\validate;
use think\Validate;

class Form extends Validate
{
    protected $rule = [
        'ab_name'  => 'require',
        'ab_phone' => ['require','unique:from','regex'=>'/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|16[6]|(17[0,3,5-8])|(18[0-9])|19[89])\d{8}$/'],
        'ab_email' =>  ['require','email'],
        'ab_company' => 'require',
        'ab_content' => 'require',
    ];
    protected $message  =   [
        'ab_name.require' => '请输入姓名',
        'ab_phone.require' => '请输入手机号',
        'ab_phone' => '请输入正确手机格式',
		'ab_phone.unique' => '手机号已存在',
        'ab_email.require' =>  '邮箱不能为空',
        'ab_email.email' =>  '请输入正确邮箱',
        'ab_company' => '公司名称不能为空',
        'ab_content' => '内容不能为空',
    ];
	protected $scene = [
        'add'  =>  ['ab_phone'],
        'edit' =>  ['ab_phone'=>'require|unique'],
    ];
}
?>