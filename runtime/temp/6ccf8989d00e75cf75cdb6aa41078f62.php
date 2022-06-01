<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"C:\phpStudy\WWW\robot\public/../application/admin\view\news\add.html";i:1616746400;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\head.html";i:1562654678;s:63:"C:\phpStudy\WWW\robot\application\admin\view\Common\header.html";i:1572940490;s:61:"C:\phpStudy\WWW\robot\application\admin\view\Common\left.html";i:1583829996;}*/ ?>
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
        <li class="am-active">公司新闻</li>
      </ol>
      <div class="tpl-portlet-components">
        <div class="portlet-title">
          <div class="caption font-green bold">
            <span class="am-icon-code"></span>添加
          </div>
        </div>
        <div class="tpl-block">
          <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
              <form class="am-form tpl-form-line-form" action="" enctype="multipart/form-data" method="post">
                <div class="am-form-group">
                  <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span
                      class="tpl-form-line-small-title">Title</span></label>
                     
                  <div class="am-u-sm-9">
                    <input type="text" class="tpl-form-input" name="title">
                    <small>请填写标题文字10-20字左右。</small>
                  </div>
                </div>
                <div class="am-form-group">
                  <label for="user-name" class="am-u-sm-3 am-form-label">Description<span
                      class="tpl-form-line-small-title">Mate</span></label>
                  <div class="am-u-sm-9">
                    <input type="text" class="tpl-form-input" name="description" value="">
                    <small>Mate -- Description</small>
                  </div>
                </div>
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">摘要 <span
                      class="tpl-form-line-small-title">Summary</span></label>
                       
                    <div class="am-u-sm-9">
                      <input type="text" class="tpl-form-input" name="summary">
                      <small>请填写摘要文字20-50字左右。</small>
                    </div>
                  </div>

               



                <div class="am-form-group">
                  <label for="user-weibo" class="am-u-sm-3 am-form-label">图片预览</label>
                  <div class="am-u-sm-9 yulan">
                    <div class="pic">
                      <img src="/static/index/images/zw.png" class="img" />
                    </div>
                  </div>
                </div>
                <div class="am-form-group">
                  <label for="user-weibo" class="am-u-sm-3 am-form-label">图片</label>
                  <div class="am-u-sm-9">
                    <div class="am-form-group am-form-file">
                      <div class="tpl-form-file-img">
                        <img src="assets/img/a5.png" alt="">
                      </div>
                      <button type="button" class="am-btn am-btn-danger am-btn-sm">
                        <i class="am-icon-cloud-upload"></i> 上传图片</button>
                      <input id="doc-form-file" type="file" name="image" />
                    </div>
                  </div>
                </div>
                <div class="am-form-group">
                  <label for="user-weibo" class="am-u-sm-3 am-form-label">内容</label>
                  <div class="am-u-sm-9">
                    <textarea id="content" rows="5" name="content"></textarea>
                  </div>
                </div>
                <div class="am-form-group">
                  <div class="am-u-sm-9 am-u-sm-push-3">
                    <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success">提交</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="/static/admin/js/jquery.min.js"></script>
  <script src="/static/admin/js/amazeui.min.js"></script>
  <script src="/static/admin/js/app.js"></script>

  <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="/static/ueditor/ueditor.all.min.js"></script>
  <script type="text/javascript" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>

  <script type="text/javascript">
    // 实例化
    UE.getEditor('content', { initialFrameWidth: 1000, initialFrameHeight: 350, });
    $("input[name='image']").change(function () {
      $(".img").attr("src", URL.createObjectURL($(this)[0].files[0]));
    });
  </script>
</body>

</html>