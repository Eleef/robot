<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"C:\phpStudy\WWW\robot\public/../application/mobile\view\news\indusarticle.html";i:1576134189;s:69:"C:\phpStudy\WWW\robot\application\mobile\view\Common\headdynamic.html";i:1576136216;s:64:"C:\phpStudy\WWW\robot\application\mobile\view\Common\header.html";i:1568180249;s:64:"C:\phpStudy\WWW\robot\application\mobile\view\Common\footer.html";i:1641820310;s:66:"C:\phpStudy\WWW\robot\application\mobile\view\Common\layerbox.html";i:1565772779;}*/ ?>
<!DOCTYPE html>
<html lang="en">
﻿
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,/">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="referrer" content="never">
    <title><?php echo $industry['title']; ?></title>
    <meta name="keywords" content="海客智能机器人,编程培训班加盟,机器人编程加盟,机器人教育加盟,机器人加盟,海客智能机器人教育,机器人加盟,编程加盟">
    <meta name="description" content="<?php echo $industry['description']; ?>">
    
    <link rel="icon" type="image/png" href="/static/admin/i/favicon.png">
    <link rel="stylesheet" href="/static/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/index/css/swiper.css">
    <link rel="stylesheet" href="/static/index/css/reset.css">
    <link rel="stylesheet" href="/static/index/css/styleMobile.css">
    <script>
var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?73556cefc0b8227237fbc6f82c60e469"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script> 
<script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=13868600"></script>
    <script src="/static/index/js/remM.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d11370b6bb078c140fe9cfb54954c30c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</head>

<body>
    <!-- top -->
<div class="contentWidth navbar">
    <div>
        <a href="/mobile">
            <img src="/static/index/images/logo.png" class="logo"/>
        </a>
    </div>
    <div class="nav_right">
        <div class="phone">
            <strong>400-8003117</strong>
            <a class="lingqu butlayer" href="#">
                领取体验课
            </a>
        </div>
        <div class="navtext">
            <ul class="navtextul" id="navtextul"></ul>
        </div>
    </div>
    <div id="navM">
        <i class="am-icon-navicon"></i>
    </div>
</div>

    <div class="contentWidth article_box">
      <div>
        <h1 class="center"><?php echo $industry['title']; ?></h1>
      </div>
      <div class="center time">
        发布时间：<?php echo date("Y-m-d H:i:s",$industry['time']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布人：admin
      </div>
      <div class="article_content">
          <div class="pic">
              <img src="/upload/<?php echo $industry['image']; ?>" />
          </div>
       
          <?php echo $industry['content']; ?>
      </div>
    </div>
    <!-- footer -->
<div class="center bottomtext">
    <p>创业有风险&nbsp;&nbsp;&nbsp;投资需谨慎</p>
    <p>广东海泓科技有限公司版权所有</p>
</div>
<div class="footer white">
    <div class="copy">
        <div class="contentWidth center">
            <ul>
                <li><a href="/mobile/introduce">课程介绍</a>|</li>
                <li><a href="/mobile/competition">机器人竞赛</a>|</li>
                <li><a href="/mobile/joinin">招商加盟</a>|</li>
                <li><a href="/mobile/achievements">教学成果</a>|</li>
                <li><a href="/mobile/about">关于我们</a></li>
            </ul>
            <a href="https://beian.miit.gov.cn">粤ICP备15027021号</a>
            
        </div>
    </div>
</div>
<div class="layerbox">
    <form class="am-form am-form-horizontal" action="" method="post">
        <span class="close am-icon-close"></span>
            <div class="input">
                <input type="text" placeholder="输入你的电话号码" name="c_phone"/>
            </div>
            <div class="input">
                <input type="text" placeholder="输入孩子的姓名" name="c_name"/>
            </div>
            <div class="input">
                <input type="text" placeholder="输入孩子年龄" name="c_age"/>
            </div>
            <button type="button" class="am-btn am-btn-primary lbut">免费领取</button>

    </form>
</div>
<script>
(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/0551b9cd96157683e59dee0287e02be62/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();
</script>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/index/js/swiper.min.js" defer></script>
<script src="/static/layer/layer.js" defer></script>
<script src="/static/index/js/public.js" defer></script>
<script src="/static/admin/js/amazeui.min.js" defer></script>
<script>
    $(".lbut").click(function () {
        var c_phone = $('.layerbox input[name="c_phone"]').val();
        var c_name = $('.layerbox input[name="c_name"]').val();
        var c_age = $('.layerbox input[name="c_age"]').val();
        $.ajax({
            type: "POST",
            data: { c_age: c_age, c_name: c_name, c_phone: c_phone },
            url: "<?php echo url('/index/index'); ?>",
            success: function (data) {

                layer.msg("<span>" + data.msg + "</span>");
                if (data.msg == '感谢您的支持！') {
                    $(".layerbox").hide();
                }
            }
        });
        return false;
    })

    $(".close").click(function () {
        $(".layerbox").hide();
    })
    $(".butlayer").click(function () {
        $(".layerbox").show();
    })
    // -------------------导航部分-------------------
    $.ajax({
        url: "/static/index/js/navjsonM.json",
        type: "POST",
        data: "",
        async: false,
        dataType: "json",
        success: function (data) {
            var data = data.nav;
            var html = "";
            $.each(data, function (i) {
                html += '<li><a href="' + data[i].href + '">' + data[i].title + '</a></li>';
            });
            $('#navtextul').html(html);
			 href();
        }
    });

</script>
</body>

</html>