<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function sendEmail($data = [])
{
    Vendor('phpmailer.phpmailer');
    $mail = new \phpmailer\PHPMailer(); //实例化

    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.163.com'; //SMTP服务器 以QQ邮箱为例子
    $mail->Port = 465;  //邮件发送端口
    $mail->SMTPAuth = true;  //启用SMTP认证
    $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式

    $mail->Username = 'haike_haike@163.com';  //你的邮箱
    $mail->Password = 'haike66';  //你的密码

    $mail->Subject = '报名申请单'; //邮件标题

    $mail->From = 'haike_haike@163.com';  //发件人地址（也就是你的邮箱）

    $mail->FromName = '海客教育';  //发件人姓名

    if ($data && is_array($data)) {
        foreach ($data as $k => $v) {
            $mail->AddAddress($v['user_email']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email2']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email3']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email4']); //添加收件人（地址，昵称）
            $mail->IsHTML(true); //支持html格式内容 

            $mail->Body =
                "姓名：" . $_POST['c_name'] .
                "<br/>年龄：" . $_POST['c_age'] .
                "<br/>手机号：" . $_POST['c_phone'];

            //发送成功就删除
            if ($mail->Send()) {
                // echo '发送成功';
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo; // 输出错误信息
            }
        }
    }
}

function sendEmails($data = [])
{
    Vendor('phpmailer.phpmailer');
    $mail = new \phpmailer\PHPMailer(); //实例化

    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.163.com'; //SMTP服务器 以QQ邮箱为例子
    $mail->Port = 465;  //邮件发送端口
    $mail->SMTPAuth = true;  //启用SMTP认证
    $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式

    $mail->Username = 'haike_haike@163.com';  //你的邮箱
    $mail->Password = 'haike66';  //你的密码

    $mail->Subject = '联系我们'; //邮件标题

    $mail->From = 'haike_haike@163.com';  //发件人地址（也就是你的邮箱）

    $mail->FromName = '海客教育';  //发件人姓名

    if ($data && is_array($data)) {
        foreach ($data as $k => $v) {
            $mail->AddAddress($v['user_email']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email2']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email3']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email4']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email5']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email6']); //添加收件人（地址，昵称）
            $mail->IsHTML(true); //支持html格式内容 

            $mail->Body = "姓名：".$_POST['ab_name'].
              "<br/>电话：".$_POST['ab_phone'].
              "<br/>邮箱：".$_POST['ab_email'].
              "<br/>公司：".$_POST['ab_company'].
              "<br/>内容：".$_POST['ab_content'];

            //发送成功就删除
            if ($mail->Send()) {
                // echo '发送成功';
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo; // 输出错误信息
            }
        }
    }
}
function sendEmailj($data = [])
{
    Vendor('phpmailer.phpmailer');
    $mail = new \phpmailer\PHPMailer(); //实例化

    $mail->IsSMTP(); // 启用SMTP
    $mail->Host = 'smtp.163.com'; //SMTP服务器 以QQ邮箱为例子
    $mail->Port = 465;  //邮件发送端口
    $mail->SMTPAuth = true;  //启用SMTP认证
    $mail->SMTPSecure = "ssl";   // 设置安全验证方式为ssl

    $mail->CharSet = "UTF-8"; //字符集
    $mail->Encoding = "base64"; //编码方式

    $mail->Username = 'haike_haike@163.com';  //你的邮箱
    $mail->Password = 'haike66';  //你的密码

    $mail->Subject = '联系我们'; //邮件标题

    $mail->From = 'haike_haike@163.com';  //发件人地址（也就是你的邮箱）

    $mail->FromName = '海客教育';  //发件人姓名

    if ($data && is_array($data)) {
        foreach ($data as $k => $v) {
            $mail->AddAddress($v['user_email']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email2']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email3']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email4']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email5']); //添加收件人（地址，昵称）
            $mail->AddAddress($v['user_email6']); //添加收件人（地址，昵称）
            $mail->IsHTML(true); //支持html格式内容 

            $mail->Body = "姓名：".$_POST['jo_name'].
              "<br/>电话：".$_POST['jo_phone'].
              "<br/>所在省：".$_POST['jo_pro'].
              "<br/>所在市：".$_POST['jo_city'];

            //发送成功就删除
            if ($mail->Send()) {
                // echo '发送成功';
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo; // 输出错误信息
            }
        }
    }
}
