<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"C:\phpStudy\WWW\robot\public/../application/admin\view\newsindus\index.html";i:1616745519;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\head.html";i:1562654678;s:63:"C:\phpStudy\WWW\robot\application\admin\view\Common\header.html";i:1572940490;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\left.html";i:1583829996;}*/ ?>
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

<body data-type="generalComponents">
	<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <a href="/" class="tpl-logo">
      <img src="/robot/public/static/index/images/logo.png" alt="">
    </a>
  </div>
  <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
    data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
      <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
        <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
          <span class="tpl-header-list-user-nick"><?php echo \think\Session::get('name'); ?></span>
        </a>
      </li>
      <li><a href="<?php echo url('admin/Login/logout'); ?>" class="tpl-header-list-link"><span
            class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
    </ul>
  </div>
</header>
	<div class="tpl-page-container tpl-page-header-fixed">
		<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
      列表
    </div>
    <div class="tpl-left-nav-list">
      <ul class="tpl-left-nav-menu">
        <li class="tpl-left-nav-item">
          <a href="/admin/index" class="nav-link">
            <i class="am-icon-wpforms"></i>
            <span>课程名单推送</span>
          </a>
        </li>
        <li class="tpl-left-nav-item">
            <a href="/admin/index/index_name" class="nav-link">
              <i class="am-icon-wpforms"></i>
              <span>加盟商名单推送</span>
            </a>
          </li>
		        <li class="tpl-left-nav-item">
          <a href="/admin/joinin" class="nav-link">
            <i class="am-icon-wpforms"></i>
            <span>加盟推送</span>
          </a>
        </li>
        <li class="tpl-left-nav-item">
          <a href="/admin/banner" class="nav-link tpl-left-nav-link-list">
            <i class="am-icon-file-picture-o"></i>
            <span>轮播图</span>
          </a>
        </li>
    </ul>
        <li class="tpl-left-nav-item">
          <a href="/admin/news" class="nav-link tpl-left-nav-link-list">
            <i class="am-icon-file-text-o"></i>
            <span>公司资讯</span>
          </a>
        </li>
        <li class="tpl-left-nav-item">
            <a href="/admin/newsindus" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-file-text"></i>
              <span>行业资讯</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
		<div class="tpl-content-wrapper">
			<ol class="am-breadcrumb">
				<li><a href="#" class="am-icon-home">首页</a></li>
				<li class="am-active">行业资讯</li>
			</ol>
			<div class="tpl-portlet-components">
				<div class="portlet-title">
					<div class="caption font-green bold">
						<span class="am-icon-code"></span> 行业资讯
					</div>
					<div class="actions">
						<ul class="actions-btn">
							<a href="<?php echo url('newsindus/add'); ?>"><button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-plus"></span> 添加</button></a>
						</ul>
					</div>
				</div>

				<div class="am-g">
					<div class="am-u-sm-12">
						<form class="am-form">
							<table class="am-table am-table-striped am-table-hover table-main">
								<thead>
									<tr>
										<th class="table-id">ID</th>
										<th class="table-title">标题</th>
										<th class="table-author am-hide-sm-only">作者</th>
										<th class="table-date am-hide-sm-only">上传日期</th>
										<th class="table-set">操作</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($industry) || $industry instanceof \think\Collection || $industry instanceof \think\Paginator): $i = 0; $__LIST__ = $industry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$industry): $mod = ($i % 2 );++$i;?>
									<tr>
										<td><?php echo $industry['id']; ?></td>
										<td>
											<div class="pic">
												<?php if($industry['image'] == null): ?>
													<img src="/robot/public/static/index/images/zw.png" />
												<?php else: ?>
													<img src="/robot/public/upload/<?php echo $industry['image']; ?>" />
												<?php endif; ?>
											</div>
											<?php echo mb_substr($industry['title'] ,0,60,'utf-8'); ?>
										</td>
										<td class="am-hide-sm-only"><?php echo date("Y-m-d H:i:s",$industry['time']); ?></td>
										<td class="am-hide-sm-only"><?php echo \think\Session::get('name'); ?></td>
										<td>
											<div class="am-btn-toolbar">
												<div class="am-btn-group am-btn-group-xs">
													<a href="<?php echo url('admin/newsindus/edit',array('id'=>$industry['id'])); ?>"
														class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
															class="am-icon-pencil-square-o"></span> 编辑</a>
													<a href="<?php echo url('admin/newsindus/del',array('id'=>$industry['id'])); ?>"
													
														onClick="return confirm('确认删除？','');"
														class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
														<span class="am-icon-trash-o"></span> 删除
													</a>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</form>
						<?php echo $page; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/robot/public/static/admin/js/jquery.min.js"></script>
	<script src="/robot/public/static/admin/js/amazeui.min.js"></script>
	<script src="/robot/public/static/admin/js/app.js"></script>
</body>

</html>