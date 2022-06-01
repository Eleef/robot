<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:71:"C:\phpStudy\WWW\robot\public/../application/index\view\index\index.html";i:1583832116;s:61:"C:\phpStudy\WWW\robot\application\index\view\Common\head.html";i:1572830715;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\header.html";i:1572830715;s:67:"C:\phpStudy\WWW\robot\application\index\view\Common\commonform.html";i:1569665148;s:62:"C:\phpStudy\WWW\robot\application\index\view\Common\layer.html";i:1564031755;s:65:"C:\phpStudy\WWW\robot\application\index\view\Common\layerbox.html";i:1565250812;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\footer.html";i:1642214281;}*/ ?>
<!DOCTYPE html>
<html lang="en">
﻿
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="referrer" content="never">
	<meta http-equiv="Cache-Control" content="no-transform " />
	 <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
   <meta name="keywords" content="少儿编程,儿童编程,少儿编程培训,孩子编程,幼儿编程,scratch,在线少儿编程,青少年编程,海客,教育,零基础 少儿编程">
    <meta name="description" content="少儿编程网分享各类少儿编程。专注于6-17岁少儿编程教育领域发展。">
	
    <title>海客智能机器人</title>
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
    <script src="/static/index/js/isMobile.js"></script>

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
    <!-- banner -->
    <div class="banner_tab_con ">
    <form method="post" data-auto="true" class="form1">
	
		<input type="hidden" name="user_email" value="liaohaiyan@haihong108.onaliyun.com">
        <input type="hidden" name="user_email2" value="liumengjie@haihong108.onaliyun.com">
        <input type="hidden" name="user_email3" value="moyongyi@haihong108.onaliyun.com">
        <input type="hidden" name="user_email4" value="chensaihu@haihong108.onaliyun.com"/>
		
        <div class="banner_tab">
            <div class="banner_tab_div">
                <div class="title">
                    <h1>免费领取</h1>
                    <p>价值<strong>388</strong>元试听课</p>
                </div>
                <div class="input_text">
                    <img src="/static/index/images/ban-icon-phone.png" />
                    <input type="text" placeholder="请输入手机号" name="c_phone" />
                </div>
                <div class="input_text">
                    <img src="/static/index/images/ban-icon-user.png" />
                    <input type="text" placeholder="孩子姓名" name="c_name" />
                </div>
                <div class="input_text">
                    <img src="/static/index/images/ban-icon-user.png" />
                    <input type="text" placeholder="孩子年龄" name="c_age" />
                </div>
                <div class="receive">
                    <button id="submit1">立即免费领取</button>
                </div>
            </div>
            <div class="banner_tab_div">
                <a href="#">
                    <div class="bottom">
                        <img src="/static/index/images/ban-icon-kefu.png" />
                        <span>海客加盟咨询</span>
                    </div>
                    <em>></em>
                </a>
            </div>
        </div>
    </form>


</div>
    <div class="swiper-container swiper-container-index">
        <div class="swiper-wrapper" id="swiper-wrapper-index">
            <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?>
            <div class="indexbanner swiper-slide"><img src="upload/<?php echo $banner['image']; ?>"/></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" id="bannerpagination"></div>
    </div>
    <video controls="controls" src="/static/index/video/WeChatindex.mp4"  class="WeChatindex"></video>
    <div class="contentWidth">
        <div class="center tuijian_title">
            <h1>海客智能机器人课程</h1>
            <p>中国领先的青少年机器人培训基地</p>
            <div class="con2">
                <span>中国机器人教育联盟理事单位&nbsp;&nbsp;|&nbsp;&nbsp;
                    广东省机器人协会副会长单位&nbsp;&nbsp;|&nbsp;&nbsp;
                    国家教育信息化产业技术创新战略联盟之一</span>
                <span>全国青少年机器人技术等级考试授权培训点&nbsp;&nbsp;|&nbsp;&nbsp;
                    中国电子协会全国青少年科普创新教育基地</span>
            </div>
        </div>
        <div>
            <ul class="con1 contentWidth">
                <li>
                    <a>
                        <div>
                            <p>来自清华大学课程研发团队</p>
                            <p>喻学习于游戏，玩中学成就大梦想</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div>
                            <p>自主研发教学硬件</p>
                            <p>打造最适合中国青少年的机器人教育</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div>
                            <p>一站式加盟服务</p>
                            <p>轻松复制直营校区盈利模式</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a>
                        <div>
                            <p>中国国家培训网创客教育</p>
                            <p>指导师培训基地</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="yuyue">
        <div class="box">
            <h2>
                <p>定制化智能教育</p>
                <p>加入海客看见未来！</p>
            </h2>
            <h3>
                <p>针对不同年龄阶段，学生的身心发展特点，设置不同的课程内容，涵盖机器人课程、</p>
                <p>编程课程和竞赛课程，培养学生成为独具思考能力的未来型人才。</p>
            </h3>
            <button class="butlayer">免费预约试听课</button>
        </div>
    </div>
    <div class="contentWidth">
        <div class="center tuijian_title">
            <h1>系统的学习孩子更受益</h1>
            <p>机器人课程+编程课程，系统的学习更受益</p>
        </div>
        <div class="contentWidth tuijian_con">
            <ul>
                <li>
                    <a href="#" class="pic">
                        <img src="/static/index/images/pic1.png" />
                    </a>
                    <div class="con">
                        <div class="title clearfix">
                            <span class="weight fl">MEI机器人课程体系</span>
                            <span class="fr">推荐:1年级及以上</span>
                        </div>
                        <div class="sub">
                            <a href="/introduce">了解课程详情</a>
                            <a href="javascript:;" class="butlayer">免费预约试听课</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="pic">
                        <img src="/static/index/images/pic2.png" />
                    </a>
                    <div class="con">
                        <div class="title clearfix">
                            <span class="weight fl">SPN编程课程体系</span>
                            <span class="fr">推荐:2年级及以上</span>
                        </div>
                        <div class="sub">
                            <a href="/introduce">了解课程详情</a>
                            <a href="javascript:;" class="butlayer">免费预约试听课</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="pic">
                        <img src="/static/index/images/pic3.png" />
                    </a>
                    <div class="con">
                        <div class="title clearfix">
                            <span class="weight fl">机器人竞赛</span>
                            <span class="fr">推荐:3年级及以上</span>
                        </div>
                        <div class="sub">
                            <a href="/introduce">了解课程详情</a>
                            <a href="javascript:;" class="butlayer">免费预约试听课</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="pic">
                        <img src="/static/index/images/pic4.png" />
                    </a>
                    <div class="con">
                        <div class="title clearfix">
                            <span class="weight fl">机器人幼儿课程体系</span>
                            <span class="fr">推荐年龄:3-6岁</span>
                        </div>
                        <div class="sub">
                            <a href="/introduce">了解课程详情</a>
                            <a href="javascript:;" class="butlayer">免费预约试听课</a>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="javascript:;" class="center lingqu butlayer">免费领取388元试听课</a>
        </div>
    </div>
    <div class="widthimg video-index">
        <div class="widthimg video-index">
            <div id="video">
                <div class="swiper-container">
                    <div class="swiper-wrapper videoswiper"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <div class="bgf4">
        <div class="center tuijian_title">
            <h1>专业的教练团队，国际国内赛事任你驰骋</h1>
            <p>为竞赛项目设置独立的部门，根据不同学生制定不同培训方案</p>
        </div>
        <div class="vex">
            <ul>
                <li><a href="/competition/vex">VEX</a></li>
                <li><a href="/competition/wer">WER</a></li>
                <li><a href="/competition/zhjn">综合技能</a></li>
                <li><a href="/competition/cys">机器人创意</a></li>
                <li><a href="/competition/makex">MakeX</a></li>
            </ul>
        </div>
        <div class="contentWidth tuijian_con tuijian_con1 clearfix">
            <ul class="duli">
                <li>
                    <a href="/competition/vex">
                        <div>
                            <img src="/static/index/images/pic5.png" class="pic"/>
                        </div>
                        <div class="con">
                            <div class="title">
                                <span class="weight">VEX工程挑战赛</span>
                                <p>VEX是全球规模最大，最受科技类大学认可的机器人比赛，也是中国青少年机器人竞赛中的重要项目。</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/competition/wer">
                        <div >
                            <img src="/static/index/images/pic6.png" class="pic"/>
                        </div>
                        <div class="con">
                            <div class="title">
                                <span class="weight">WER工程创新赛</span>
                                <p>WER是一项面向全球4-18岁青少年的教育机器人比赛，每年全球有超过50多个国家的50万名选手参加各级WER选拔赛。</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/competition/zhjn" >
                        <div>
                            <img src="/static/index/images/pic7.png" class="pic"/>
                        </div>
                        <div class="con">
                            <div class="title">
                                <span class="weight">机器人综合技能</span>
                                <p>机器人综合技能比赛是中国青少年机器人竞赛项目之一。其活动对象为中小学生，要求参加比赛的代表队在现场自行拼装机器人、编制机器人运行程序、调试和操作机器人。</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/competition/cys">
                        <div><img src="/static/index/images/pic8.png" class="pic"/></div>
                        <div class="con">
                            <div class="title">
                                <span class="weight">机器人创意项目</span>
                                <p>机器人创意比赛是基于每年一度的中国青少年机器人竞赛的主题与规则，教育部、电教馆举办的机器人赛事，都设置了创意机器人相关项目。</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="contentWidth tuijian_con am-padding-top-xl am-margin-bottom-xs">
            <p href="javascript:;" class="center lingqu ">海客获得荣誉</p>
        </div>


          
        <div class="widthimg">
             <div  class="prize_logo">
                 <img src="/static/index/images/prize1.png"/>
                 <img src="/static/index/images/prize2.png"/>
                 <img src="/static/index/images/prize3.png"/>
                 <img src="/static/index/images/prize4.png"/>
             </div>





              <div class="contentWidth prize">
                
                
                <div>
                    <h1>国际赛荣誉</h1>
                    <p>2019第十三届VEX亚洲机器人锦标赛 高中组一等奖；</p>
                    <p> 2019世界机器人大赛 冠军挑战赛 VEX EDR初中组 冠军</p>
                    <p>2019世界机器人大赛 总决赛 VEX EDR 初中组 全能奖 </p>
                    <p> 2019亚洲青少年机器人锦标赛南大区赛 VEX EDR初中组 冠军</p>
                    <p>2019WER世界锦标赛 小学组 一等奖</p>
                    <p>2019WER世界锦标赛 初中组 一等奖</p>
                    <p>2018赛季WER世界锦标赛小学组一等奖</p>
                    <p>2017赛季WER世界锦标赛初中组亚军</p>
                    <p>2016泛太平洋VEX工程挑战赛季军，Gold Award</p>
                    <p>2016泛太平洋VEX工程挑战赛,Energy Award . Science Award</p>
                </div>
                <div>
                   <h1>国家赛荣誉</h1> 
                   <p>2019中国青少年机器人竞赛VEX工程挑战赛小学组二等奖
                    </p>
                   <p>2019中国青少年机器人竞赛VEX工程挑战赛高中组二等奖
                    </p>
                   <p>2018中国青少年机器人竞赛综合技能项目小学组二等奖
                    </p>  
                   <p>2018中国青少年机器人竞赛VEX工程挑战赛高中组三等奖
                    </p>
                   <p>2017中国青少年机器人竞赛VEX工程挑战赛高中组二等奖
                    </p>
                   <p>2017中国青少年机器人竞赛VEX工程挑战赛小学组三等奖
                    </p>
                   <p>2017中国青少年机器人竞赛创意项目小学组二等奖
                   </p>
                   <p> 2016中国青少年机器人竞赛足球项目小学组一等奖
                    </p>
                   <p>2016中国青少年机器人竞赛创意项目小学组一等奖
                    </p>
                   <p>2015中国青少年机器人竞赛创意项目二等奖</p>
                
                </div>
                <div>
                    <h1>省级赛荣誉</h1>  
                    <p>    2019广东省第二十届中小学电脑制作活动创客项目 初中组冠军
                       </p>
                    <p> 2019广东省青少年机器人竞赛VEX工程挑战赛小学、高中组冠军
                       </p>

                    <p> 2019广东省青少年机器人竞赛创意机器人比赛初中组冠军
                       </p>
                    <p> 2019广东省青少年机器人竞赛WER工程挑战赛小学组亚军
                       </p>
                    <p> 2019广东省青少年机器人竞赛VEX工程挑战赛高中组亚军
                       </p>
                    <p> 2018中国青少年机器人大赛广东省VEX工程挑战赛高中组冠军
                       </p>
                    <p> 2018中国青少年机器人大赛广东省综合技能项目小学组冠军
                        </p>
                    <p>2018中国青少年机器人竞赛WER工程创新赛广东省季军
                       </p>
                    <p> 2017广东省青少年机器人竞赛VEX工程挑战赛小学、高中组冠军
                       </p>
                    <p> 2017广东省青少年机器人大赛WER工程创新赛小学、初中组亚军
                       </p>
                    <p> 2016第十六届广东省青少年机器人竞赛FLL工程挑战赛</p>
                </div>
            </div> 



        </div>  

    <div class="widthimg white dazao">
		<div class="box">
		<!--
            <h1>自主研发教学硬件</h1>
            <h2>打造最适合中国青少年的机器人教育</h2>
            <div class="text">
                海客根据中国学生的身心发展特点，研发了MEI机器人课程体系，并配置专用的教学硬件，打造最适合中国青少年的机器人课程。教具兼容多种编程语言和传感器，让学生能够充分发挥自己的想像力，轻松完成自己的机器人作品。
            </div>
        -->
		</div>
        
        <img src="/static/index/images/con4-2.jpg" class="pic" />
    </div>
    <!-- 师资实力 -->
    <div class="tuijian_con contentWidth">
        <div class="center tuijian_title tuijian_title_ter">
            <h1>学习机器人课程，选对老师很重要</h1>
            <p>
                <span>
                    <img src="/static/index/images/arrow.png" />
                    来自清华大学教学研发团队
                </span>
                <span><img src="/static/index/images/arrow.png" />所有老师100%持证上岗</span>
                <span><img src="/static/index/images/arrow.png" />严格的培训和考核</span>
                <span><img src="/static/index/images/arrow.png" /> 每周一次教学研究会议</span>
            </p>
        </div>
        <!-- Swiper -->
        <div class="swiper-container swiper-container-ter ter_content_list">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/static/index/images/ter-head-1.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">喻江</h2>
                            <h3 class="center">海客智能教学总监·清华大学硕士</h3>
                            <p>本科毕业于南京大学软件专业，研究生毕业于清华大学，喻老师专注于STEAM创客教育等相关研究，从事青少年机器人教育多年，有丰富的课程开发经验和教学经验。</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/static/index/images/ter-head-2.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">蔡霖</h2>
                            <h3 class="center">海客金牌讲师·大连理工大学硕士</h3>
                            <p>毕业于大连理工大学机械专业硕士，具有多年的教学经验。蔡老师讲课风格幽默且思路清晰，课堂中也不断贯穿STEAM教育理念，善于和小孩沟通，能够顾及到学生的心里特点和接受能力。</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/static/index/images/ter-head-3.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">程志刚</h2>
                            <h3 class="center">WER机器人竞赛金牌教练</h3>
                            <p>拥有多年的国际大赛国内赛事带队经验，队员荣获2017WER机器人世界锦标赛亚军。包揽2018WER机器人广州市赛冠亚季军。
                            </p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/static/index/images/ter-head-4.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">刘梦杰</h2>
                            <h3 class="center">机器人竞赛金牌教练</h3>
                            <p>
                                刘梦杰老师，师范类教育专业毕业，曾任多家小学和教育机构机器人教育指导老师，拥有丰富的教学经验。带队获得广东省青少年机器人竞赛机器人综合技能比赛小学组一等奖 、并在全国青少年机器人竞赛机器人综合技能比赛中获得二等奖。
                            </p>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/static/index/images/ter-head-5.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">邱润泽</h2>
                            <h3 class="center">机器人竞赛金牌教练</h3>
                            <p>丘润泽老师注重培养学生兴趣，善于激发学生的潜能，授课风格幽默风趣，广受学员与家长喜爱。他多次带队在机器人创意比赛上获得优异成绩：第20届广东省中小学电脑制作活动“创意智造”初中组冠军；2019广州市青少年电子信息智能创新大赛电子工程项目小学组冠军等。
                            </p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="swiper-button-ter swiper-button-next swiper-button-black"></div>
        <div class="swiper-button-ter swiper-button-prev swiper-button-black"></div>
        <a href="javascript:;" class="center lingqu butlayer">免费领取388元试听课</a>
    </div>
    <div id="certify">
        <div class="center tuijian_title">
            <h1 class="white">看家长怎么说</h1>
            <p class="white">家长的认可是海客不断进步的源泉</p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/static/index/images/w1.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w2.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w3.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w4.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w5.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w6.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w7.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w8.png" />
                </div>
                <div class="swiper-slide"><img src="/static/index/images/w9.png" />
                </div>
            </div>
        </div>
        <!-- white -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="flexcontent">
        <div class="center tuijian_title clearfix">
            <h1>海客活动精彩瞬间</h1>
            <p>打造不同形式的科技体验活动，让更多孩子爱上机器人</p>
        </div>
        <div class="contentWidth flex botton_pic">
            <!-- 左边 -->
            <a class="flex1">
                <img src="/static/index/images/pic9.jpg" />
                <p>粤港澳创客大赛启动会</p>
            </a>
            <!-- 右边 -->
            <div class="flex2 column">
                <!-- 上边 -->
                <div class="flex h27">
                    <a class="flex2"> <img src="/static/index/images/pic10.jpg" />
                        <p>广东实验中学科技体验活动</p>
                    </a>
                    <a class="flex1"> <img src="/static/index/images/pic11.jpg" />
                        <p>中山大学附属中学科技体验活动</p>
                    </a>
                </div>
                <!-- 下边 -->
                <div class="flex h27">
                    <a class="flex1"> <img src="/static/index/images/pic12.jpg" />
                        <p>中国电信科技体验活动</p>
                    </a>
                    <a class="flex2"> <img src="/static/index/images/pic13.jpg" />
                        <p>海客智能科技圣诞节</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="widthimg">
        <div class="center tuijian_title clearfix">
            <h1>品牌合作</h1>
            <p>与各大品牌深度合作，选择海客值得信赖</p>
        </div>
        <div>
            <ul class="fr_logo contentWidth">
                <li>
                    <img src="/static/index/images/con5_16.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_17.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_13.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_11.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_12.png">
                </li>
            </ul>
			<ul class="fr_logo contentWidth">


                <li>
                    <img src="/static/index/images/con5_09.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_10.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_18.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_19.png">
                </li>
                <li>
                    <img src="/static/index/images/con5_20.png">
                </li>
            </ul>
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

<script src="/static/index/js/isMobile.js"></script>
<script>
     window.onload = function () {
        var arr = [];
            $(".swiper-wrapper .body").each(function(){
            arr.push($(this).height()) 
        })
        function getMax(h){
            var max = undefined;
            for(var i=0;i<arr.length;i++){
                max = max === undefined ? arr[i] : (max>arr[i] ? max : arr[i])
            }
            return max;
        }
        var num = getMax(arr);
        $(".swiper-wrapper .body").height(num)
     }
    
</script>
 <script src="/static/index/js/title.js" defer></script>
</html>