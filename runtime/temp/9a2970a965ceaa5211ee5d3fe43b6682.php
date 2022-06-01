<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"C:\phpStudy\WWW\robot\public/../application/admin\view\index\index_name.html";i:1572938401;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\head.html";i:1562654678;s:63:"C:\phpStudy\WWW\robot\application\admin\view\Common\header.html";i:1572940490;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\left.html";i:1583829996;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/static/admin/i/favicon.png">
    <link rel="stylesheet" href="/static/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <link rel="stylesheet" href="/static/admin/css/app.css">
  </head>

<body data-type="generalComponents">
  <header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <a href="/" class="tpl-logo">
      <img src="/static/index/images/logo.png" alt="">
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
        <li class="am-active">课程名单推送</li>
      </ol>

      <div class="tpl-portlet-components">
        <div class="portlet-title">
          <div class="caption font-green bold">
            <span class="am-icon-code"></span> 课程名单推送
          </div>

        </div>

        <div class="am-g">
          <div class="am-u-sm-12">
            <table class="am-table am-table-bd am-table-striped admin-content-table tabnum">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>手机</th>
                  <th>姓名</th>
                  <th>省</th>
                  <th>市</th>
                  <th class="table-date am-hide-sm-only">登记时间</th>
                  <th>&nbsp;&nbsp;&nbsp;操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($joinin) || $joinin instanceof \think\Collection || $joinin instanceof \think\Paginator): $i = 0; $__LIST__ = $joinin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$joinin): $mod = ($i % 2 );++$i;?>
                <tr>
                  <td class="num"><?php echo $joinin['id']; ?></td>
                  <td><?php echo $joinin['jo_phone']; ?></td>
                  <td><a href="#"><?php echo $joinin['jo_name']; ?></a></td>
                  <td><span><?php echo $joinin['jo_pro']; ?></span></td>
                  <td><span><?php echo $joinin['jo_city']; ?></span></td>
                  <td class="am-hide-sm-only"><?php echo date("Y-m-d H:i:s",$joinin['jo_time']); ?></td>
                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                    
                        <a href="<?php echo url('admin/index/joinindel',array('id'=>$joinin['id'])); ?>"

                          
                          onClick="return confirm('确认删除？','');"
                          class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                          <span class="am-icon-trash-o am-text-danger"></span> <span class="am-text-danger">删除</span>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
            <?php echo $page; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/static/admin/js/jquery.min.js"></script>
  <script src="/static/admin/js/amazeui.min.js"></script>
  <script src="/static/admin/js/app.js"></script>
  <script>
    $(function () {
      function number() {
        for (var i = 0; i < $(".tabnum tbody tr").length; i++) {
          $(".num").get(i).innerHTML = i + 1;
        }
      }
      number();
    });
  </script>
</body>

</html>