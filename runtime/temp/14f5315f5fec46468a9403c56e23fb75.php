<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:72:"C:\phpStudy\WWW\robot\public/../application/index\view\news\article.html";i:1572830714;s:68:"C:\phpStudy\WWW\robot\application\index\view\Common\headdynamic.html";i:1576136298;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\header.html";i:1572830715;s:62:"C:\phpStudy\WWW\robot\application\index\view\Common\layer.html";i:1564031755;s:65:"C:\phpStudy\WWW\robot\application\index\view\Common\layerbox.html";i:1565250812;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\footer.html";i:1642214281;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="referrer" content="never">
	<meta http-equiv="Cache-Control" content="no-transform " />
	 <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
   <meta name="keywords" content="少儿编程,儿童编程,少儿编程培训,孩子编程,幼儿编程,scratch,在线少儿编程,青少年编程,海客,教育,零基础 少儿编程">
   <meta name="description" content="<?php echo $industry['description']; ?>">
	
    <title><?php echo $industry['title']; ?></title>
    <link rel="icon" type="image/png" href="/static/admin/i/favicon.png">
    <link rel="stylesheet" href="/static/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/index/css/swiper.css">
    <link rel="stylesheet" href="/static/index/css/reset.css">
    <link rel="stylesheet" href="/static/index/css/style.css">
<script>
var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?73556cefc0b8227237fbc6f82c60e469"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script> 
<script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=13868600"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?73556cefc0b8227237fbc6f82c60e469";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>
    ﻿<!-- top -->
<div class="contentWidth navbar">
    <div>
        <a href="/">
            <img src="/static/index/images/logo.png" />
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
</div>

    <div class="contentWidth article_box">
      <div>
        <h1 class="f36 center"><?php echo $industry['title']; ?></h1>
      </div>
      <div class="center f16 time">
        发布时间：<?php echo date("Y-m-d H:i:s",$industry['time']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布人：海客智能机器人课程
      </div>
      <div class="article_content">
          <div class="pic">
              <img src="/upload/<?php echo $industry['image']; ?>" />
          </div>
       
          <?php echo $industry['content']; ?>
      </div>
    </div>
   <!-- 悬浮条 -->
<div class="layerfrom">
    <form action="" method="post">
        <div class="contentWidth white layerfrom_con">
            <div>
                <img src="/static/index/images/layerlogo.png" />
            </div>
            <div class="textright">
                <p>免费领取</p>
                <p class="jiazhi"><span>价值</span><em>388</em><span>元试听课</span></p>
            </div>
            <div class="input">
                <div class="text_input phone">
                    <img src="/static/index/images/ban-icon-phone.png" />
                    <input type="text" class="text" placeholder="请输入11位手机号" name="c_phone"/>
                </div>
                <div class="text_input">
                    <img src="/static/index/images/ban-icon-user.png" />
                    <input type="text" class="text" placeholder="孩子姓名" name="c_name" />
                </div>
                <div class="text_input">
                    <img src="/static/index/images/ban-icon-user.png" />
                    <input type="text" class="text" placeholder="孩子年龄" name="c_age" />
                </div>
            </div>
            <div>
                <button class="white f18" id="submit2">免费领取体验课</button>
            </div>
        </div>
    </form>

</div>
    <div class="layerbox">
    <form class="am-form am-form-horizontal" action="" method="post">
        <span class="close am-icon-close"></span>
        <div class="am-form-group">
            <div class="input">
                <input type="text" placeholder="输入你的电话号码" name="c_phone"/>
            </div>
        </div>
        <div class="am-form-group">
            <div class="input">
                <input type="text" placeholder="输入孩子的姓名" name="c_name"/>
            </div>
        </div>
        <div class="am-form-group">
            <div class="input">
                <input type="text" placeholder="输入孩子年龄" name="c_age"/>
            </div>
        </div>
        <div class="am-form-group">
            <button type="button" class="am-btn am-btn-primary lbut">免费领取</button>
        </div>
    </form>
</div>
    ﻿<!-- footer -->
<div class="footer minw white">
    <div class="address">
        <div class="contentWidth">
            <div class="address_con">
                <!-- 地址 -->
                <dl class="clearfix">
                    <dd>
                        <p>广州总部 (海客总部)：</p>
                        <p>广州市天河区体育西路111号建和中心18楼BCD座</p>
                    </dd>
                    <dd>
                        <p>广州珠江新城校区：</p>
                        <p>广州市天河区兴盛路10号334-335</p>
                    </dd>
					<dd>
                        <p>南沙校区：</p>
                        <p>广东省广州市南沙区双山大道南自贸区跨境购物免税店</p>
                    </dd>
					<dd>
                        <p>珠海校区：</p>
                        <p>广东省珠海市香洲区香榭路33好正方优和汇红荔5层</p>
                    </dd>
                    <dd>
                        <p>长沙(湖南总部)：</p>
                        <p>长沙市开福区金泰路与网船班路交汇处世纪云中心三楼</p>
                    </dd>
                    <dd>
                        <p>佛山总部：</p>
                        <p>佛山市禅城区文华中路湖明街20号文华广场4楼</p>
                    </dd>
                    <dd>
                        <p>增城(增城总部)：</p>
                        <p>广州市增城区新塘镇永宁街碧桂园凤凰城凤荔苑二街18号</p>
                    </dd>
					<dd>
                        <p>增城第二校区：</p>
                        <p>广东省广州市增城区新塘镇东进东路8号盛世名门会所一楼花园教育</p>
                    </dd>

					<dd>
                        <p>深圳校区：</p>
                        <p>深圳市龙岗区平安里二路3-114</p>
                    </dd>
					<dd>
                        <p>惠州校区：</p>
                        <p>惠州市惠城区旭日路2号文岭西堤花园邦德教育</p>
                    </dd>
					<dd>
                        <p>中山校区：</p>
                        <p>中山市东区中山六路1号天奕国际广场2层1卡商铺</p>
                    </dd>
					<dd>
                        <p>荆州校区：</p>
                        <p>荆州市沙市区北京路与红门路交汇处万家福超市二层</p>
                    </dd>					
					<dd>
                        <p>衡阳校区：</p>
                        <p>湖南省衡阳市祁东县楚杰路79号</p>
                    </dd>
                </dl>

                <!-- 公众号，二维码 -->
					<div class="public_number">
                    <div class="erweima">
                        <img src="/static/index/images/erweima.png" />
                    </div>
                    <div class="erweima_txt">
                        <div class="erweima_txt_tit">
                            <p>微信扫二维码</p>
                            <p>关注官方公众</p>
                        </div>
                        <div class="phone">
                            <p class="txt">预约免费试听课</p>
                            <p class="f16 weight number">400-8003117</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- copy -->
    <div class="copy">
        <div class="contentWidth center">
            <a href="https://beian.miit.gov.cn">粤ICP备15027021号</a>
        </div>
    </div>
</div>

<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/index/js/swiper.min.js" defer></script>
<script src="/static/layer/layer.js" defer></script>
<script src="/static/index/js/ajax.js"></script>
<script src="/static/index/js/public.js" defer></script>

<script src="/static/admin/js/amazeui.min.js" defer></script>

<script>
(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/0551b9cd96157683e59dee0287e02be62/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();


       $("#submit1").click(function(){
        var c_phone = $('.form1 input[name="c_phone"]').val();
        var c_name = $('.form1 input[name="c_name"]').val();
        var c_age = $('.form1 input[name="c_age"]').val();
        $.ajax({
            type: "POST",
            data: { c_age: c_age, c_name: c_name, c_phone: c_phone },
            url: "<?php echo url('index/index'); ?>",
            success: function (data) {
                layer.msg("<span>" + data.msg + "</span>");
            }
        });
        return false; 
       })
    $("#submit2").click(function(){
        var c_phone = $('.input input[name="c_phone"]').val();
        var c_name = $('.input input[name="c_name"]').val();
        var c_age = $('.input input[name="c_age"]').val();
        $.ajax({
            type: "POST",
            data: { c_age: c_age, c_name: c_name, c_phone: c_phone },
            url: "<?php echo url('index/index'); ?>",
            success: function (data) {
                layer.msg("<span>" + data.msg + "</span>");
            }
        });
        return false; 
       })
	   
	      $(".lbut").click(function(){
        var c_phone = $('.layerbox input[name="c_phone"]').val();
        var c_name = $('.layerbox input[name="c_name"]').val();
        var c_age = $('.layerbox input[name="c_age"]').val();
        $.ajax({
            type: "POST",
            data: { c_age: c_age, c_name: c_name, c_phone: c_phone },
            url: "<?php echo url('index/index'); ?>",
            success: function (data) {
                layer.msg("<span>" + data.msg + "</span>");
                if(data.msg == '感谢您的支持！'){
                    $(".layerbox").hide();
                }
            }
        });
        return false; 
       })

       $(".close").click(function(){
    $(".layerbox").hide();
})
$(".butlayer").click(function(){
    $(".layerbox").show();
})
// -------------------导航部分-------------------
$.ajax({
    url: "/static/index/js/navjson.json",
    type: "POST",
    data: "",
    async: false,
    dataType: "json",
    success: function (data) {
        var data = data.nav;
        var html = "";
        $.each(data, function (i) {
            if (typeof data[i].children != "undefined" && data[i].children.length > 0) {
                html += '<li><a href="' + data[i].href + '">' + data[i].title + '</a><ul class="secondlevel center">';
                $.each(data[i].children, function (j) {
                    html += '<li><a href="' + data[i].children[j].href + '">' + data[i].children[j].title + '</a></li>';
                });
                html += '</ul></li>';
            }
            else {
                html += '<li><a href="' + data[i].href + '">' + data[i].title + '</a></li>';
            }
        });
        $('#navtextul').html(html);
        href();
        // 导航经过
        $(".navtextul > li").hover(function () {
            $(this).children(".secondlevel").show();
        }, function () {
            $(this).children(".secondlevel").hide();
        })
    }
});
</script>
 <script src="/static/index/js/rem.js"></script>
</body>

</html>