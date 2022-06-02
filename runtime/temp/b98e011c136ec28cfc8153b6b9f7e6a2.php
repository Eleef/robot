<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"C:\phpStudy\WWW\robot\public/../application/admin\view\login\index.html";i:1572942557;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\head.html";i:1562654678;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/robot/public/static/admin/i/favicon.png">
    <link rel="stylesheet" href="/robot/public/static/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/robot/public/static/admin/css/admin.css">
    <link rel="stylesheet" href="/robot/public/static/admin/css/app.css">
  </head>
<body data-type="login">
	<div class="am-g myapp-login">
		<div class="myapp-login-logo-block  tpl-login-max">
			<div class="myapp-login-logo-text">
				<div class="myapp-login-logo-text">
					<span> Login In</span> <i class="am-icon-skyatlas"></i>
				</div>
			</div>
			<div class="am-u-sm-10 login-am-center">
				<form class="am-form" action="<?php echo url('login/login'); ?>" method="post">
					<fieldset>
						<div class="am-form-group">
							<input type="text" name="name" placeholder="用户名">
						</div>
						<div class="am-form-group">
							<input type="password" name="password" placeholder="密码">
						</div>
						<p><button type="submit" class="am-btn am-btn-default" id="login">登录</button></p>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<script src="/robot/public/static/admin/js/jquery.min.js"></script>
	<script src="/robot/public/static/admin/js/amazeui.min.js"></script>
	<script src="/robot/public/static/admin/js/app.js"></script>
</body>
</html>