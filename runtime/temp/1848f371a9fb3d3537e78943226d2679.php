<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:71:"C:\phpStudy\WWW\robot\public/../application/index\view\index\index.html";i:1654081264;s:61:"C:\phpStudy\WWW\robot\application\index\view\Common\head.html";i:1654081211;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\header.html";i:1572830715;s:67:"C:\phpStudy\WWW\robot\application\index\view\Common\commonform.html";i:1569665148;s:65:"C:\phpStudy\WWW\robot\application\index\view\Common\layerbox.html";i:1565250812;s:62:"C:\phpStudy\WWW\robot\application\index\view\Common\layer.html";i:1564031755;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\footer.html";i:1654081168;}*/ ?>
<!DOCTYPE html>
<html lang="en">
﻿<head>
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
  <link rel="icon" type="image/png" href="/robot/public/static/admin/i/favicon.png">
  <link rel="stylesheet" href="/robot/public/static/admin/css/amazeui.min.css" />
  <link rel="stylesheet" href="/robot/public/static/index/css/swiper.css">
  <link rel="stylesheet" href="/robot/public/static/index/css/reset.css">
  <link rel="stylesheet" href="/robot/public/static/index/css/style.css">
  <script>
    var _hmt = _hmt || []; (function () { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?73556cefc0b8227237fbc6f82c60e469"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script>

  <script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=13868600"></script>
  <script>
    var _hmt = _hmt || [];
    (function () {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?73556cefc0b8227237fbc6f82c60e469";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
</head>

<body>
    <script src="/robot/public/static/index/js/isMobile.js"></script>

    ﻿<!-- top -->
<div class="contentWidth navbar">
    <div>
        <a href="/">
            <img src="/robot/public/static/index/images/logo.png" />
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
                    <img src="/robot/public/static/index/images/ban-icon-phone.png" />
                    <input type="text" placeholder="请输入手机号" name="c_phone" />
                </div>
                <div class="input_text">
                    <img src="/robot/public/static/index/images/ban-icon-user.png" />
                    <input type="text" placeholder="孩子姓名" name="c_name" />
                </div>
                <div class="input_text">
                    <img src="/robot/public/static/index/images/ban-icon-user.png" />
                    <input type="text" placeholder="孩子年龄" name="c_age" />
                </div>
                <div class="receive">
                    <button id="submit1">立即免费领取</button>
                </div>
            </div>
            <div class="banner_tab_div">
                <a href="#">
                    <div class="bottom">
                        <img src="/robot/public/static/index/images/ban-icon-kefu.png" />
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
            <div class="indexbanner swiper-slide"><img src="upload/<?php echo $banner['image']; ?>" /></div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" id="bannerpagination"></div>
    </div>
    <video controls="controls" src="/robot/public/static/index/video/WeChatindex.mp4" class="WeChatindex"></video>
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
                        <img src="/robot/public/static/index/images/pic1.png" />
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
                        <img src="/robot/public/static/index/images/pic2.png" />
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
                        <img src="/robot/public/static/index/images/pic3.png" />
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
                        <img src="/robot/public/static/index/images/pic4.png" />
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
                <!-- <li><a href="/competition/makex">MakeX</a></li> -->
            </ul>
        </div>
        <div class="contentWidth tuijian_con tuijian_con1 clearfix">
            <ul class="duli">
                <li>
                    <a href="/competition/vex">
                        <div>
                            <img src="/robot/public/static/index/images/pic5.png" class="pic" />
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
                        <div>
                            <img src="/robot/public/static/index/images/pic6.png" class="pic" />
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
                    <a href="/competition/zhjn">
                        <div>
                            <img src="/robot/public/static/index/images/pic7.png" class="pic" />
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
                        <div><img src="/robot/public/static/index/images/pic8.png" class="pic" /></div>
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

        <div class="contentWidth prize_logo">
            <img src="/robot/public/static/index/images/prize1.png" />
            <img src="/robot/public/static/index/images/prize2.png" />
            <img src="/robot/public/static/index/images/prize3.png" />
            <!-- <img src="/robot/public/static/index/images/prize4.png"/> -->
        </div>





        <div class="contentWidth prize">


            <div>
                <h1>国际级</h1>
                <p>机器人世界锦标赛亚太分区赛冠军、亚军、季军、最佳惊奇奖、最佳建造奖</p>
                <p>机器人世界锦标赛亚太分区赛一等奖、二等奖、三等奖</p>
                <p>2022年VEX机器人亚洲公开赛精英交流赛高中组冠军、亚军</p>
                <p>2022年VEX机器人亚洲公开赛精英交流赛初中组冠军、亚军、季军、一等奖、二等奖、三等奖</p>
                <p>2022年VEX机器人亚洲公开赛精英交流赛小学组一等奖</p>
                <p>2020VEX亚洲公开赛VRC高中组一等奖</p>
                <p>2020VEX亚洲公开赛VRC初中组一等奖</p>
                <p>2020VEX亚洲公开赛IQ小学组一等奖</p>
                <p>2020世界机器人大赛总决赛VRC初中组冠军</p>
                <p>2019世界机器人大赛总决赛VRC初中组全能奖</p>
                <p>2019世界机器人大赛总决赛VRC初中组一等奖、二等奖</p>
                <p>2019世界机器人大赛冠军挑战赛VRC初中组冠军、季军</p>
                <p>2019世界机器人大赛冠军挑战赛VRC初中组设计奖</p>
                <p>2019VEX亚洲公开赛VRC高中组一等奖</p>
                <p>2019VEX亚洲公开赛VRC初中组一等奖</p>
                <p>2018赛季WER世界锦标赛小学组一等奖</p>
                <p>2017WER世界锦标赛初中组亚军 </p>
                <p>2016泛太平洋VEX工程挑战赛季军、Gold Award </p>
                <p>2016泛太平洋VEX工程挑战赛Energy Award、 ScienceAward </p>

            </div>
            <div>
                <h1>国家级</h1>
                <p>亚洲机器人锦标赛VEX中国区选拔赛珠三角专场赛VEX VRC中学组刷新世界纪录</p>
                <p>亚洲机器人锦标赛VEX中国区选拔赛珠三角专场赛VEX IQ小学组刷新世界纪录</p>
                <p>亚洲机器人锦标赛VEX中国区选拔赛珠三角专场赛冠军、亚军、季军、最佳惊奇奖</p>
                <p>亚洲机器人锦标赛VEX中国区选拔赛珠三角专场赛一等奖、二等奖</p>
                <p>VEX世界锦标赛中国总决赛VRC高中组、初中组一等奖</p>
                <p>VEX世界锦标赛中国总决赛附加赛VRC初中组亚军、季军 </p>
                <p>2020VEX世界锦标赛中国总决赛VRC高中组、初中组一等奖</p>
                <p>2019VEX中国锦标赛VRC高中组、初中组一等奖 </p>
                <p>2019中国青少年机器人竞赛VEX工程挑战赛高中组、小学组二等奖 </p>
                <p>2019中国青少年机器人竞赛创意机器人三等奖 </p>
                <p>2018中国青少年机器人竞赛VEX工程挑战赛高中组三等奖 </p>
                <p>2018中国青少年机器人竞赛综合技能项目小学组二等奖</p>
                <p>2017中国青少年机器人竞赛VEX工程挑战赛高中组二等奖 </p>
                <p>2017中国青少年机器人竞赛VEX工程挑战赛小学组三等奖 </p>
                <p>2017中国青少年机器人竞赛创意项目小学组二等奖</p>
                <p>2016中国青少年机器人竞赛足球项目小学组一等奖</p>
                <p>2016中国青少年机器人竞赛创意项目小学组一等奖 </p>
                <p>2015中国青少年机器人竞赛创意项目二等奖</p>


            </div>
            <div>
                <h1>区域级</h1>
                <p>成都数字娱乐博览会VEX华西区赛初中组全能奖、冠军、亚军</p>
                <p>成都数字娱乐博览会VEX华西区赛高中组挑战赛一等奖</p>
                <p>2021广东省青少年机器人竞赛VEX工程挑战赛小学组冠军、亚军、季军</p>
                <p>2021广东省青少年机器人竞赛VEX工程挑战赛初中组冠军、亚军</p>
                <p>2021广东省青少年机器人竞赛VEX工程挑战赛高中组冠军、亚军</p>
                <p>2020广东省青少年机器人竞赛VEX工程挑战赛小学组冠军 </p>
                <p>2020广东省青少年机器人竞赛VEX工程挑战赛初中组冠军 </p>
                <p>2020广东省青少年机器人竞赛VEX工程挑战赛高中组冠军 </p>
                <p>2020广东省青少年机器人竞赛VEX工程挑战赛亚军</p>
                <p>2020广东省青少年机器人竞赛综合机器小学组亚军</p>
                <p>2019广东省电脑制作活动初中组冠军 </p>
                <p>2019广东省青少年机器人竞赛VEX工程挑战赛小学组冠军</p>
                <p>2019广东省青少年机器人竞赛VEX工程挑战赛高中组冠军 </p>
                <p>2019广东省青少年机器人竞赛创意赛初中组冠军 </p>
                <p>2018中国青少年机器人竞赛广东省VEX工程挑战赛高中组冠军</p>
                <p>2018中国青少年机器人竞赛广东省综合技能项目小学组冠军</p>
                <p>2018中国青少年机器人竞赛WER工程创新赛广东省季军 </p>
                <p>2017广东省青少年机器人竞赛VEX工程挑战赛小学、高中组冠军</p>
                <p>2017广东省青少年机器人竞赛WER工程创新赛小学、初中组亚军</p>
                <p>2016第十六届广东省青少年机器人竞赛FLL工程挑战赛二等奖</p>
                <p>2015第十五届广东省青少年机器人竞赛创意项目冠军</p>
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

        <img src="/robot/public/static/index/images/con4-2.jpg" class="pic" />
    </div>
    <!-- 师资实力 -->
    <div class="tuijian_con contentWidth">
        <div class="center tuijian_title tuijian_title_ter">
            <h1>学习机器人课程，选对老师很重要</h1>
            <p>
                <span>
                    <img src="/robot/public/static/index/images/arrow.png" />
                    来自清华大学教学研发团队
                </span>
                <span><img src="/robot/public/static/index/images/arrow.png" />所有老师100%持证上岗</span>
                <span><img src="/robot/public/static/index/images/arrow.png" />严格的培训和考核</span>
                <span><img src="/robot/public/static/index/images/arrow.png" /> 每周一次教学研究会议</span>
            </p>
        </div>
        <!-- Swiper -->
        <div class="swiper-container swiper-container-ter ter_content_list">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/robot/public/static/index/images/ter-head-1.png" />
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
                                <img src="/robot/public/static/index/images/ter-head-2.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">于瑶</h2>
                            <h3 class="center">海客培训学院院长</h3>
                            <p>北京航空航天大学软件工程专业硕士，本科信息技术学（师范），少儿心理咨询师、家庭教育指导师教育行业八年，善于从孩子角度出发，注重创客教育中孩子全面的发展。</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/robot/public/static/index/images/ter-head-3.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">朱达威</h2>
                            <h3 class="center">VEX机器人竞赛金牌教练</h3>
                            <p>朱达威教练是海客机器人第一批青少年机器人竞赛教练之一，拥有多年国际竞赛经验，带队荣获世界机器人大赛冠、季军、全能奖、设计奖，VEX南大区锦标赛冠军，中国青少年机器人竞赛广东省冠军、亚军。
                            </p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/robot/public/static/index/images/ter-head-4.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">刘梦杰</h2>
                            <h3 class="center">机器人竞赛金牌教练</h3>
                            <p>
                                刘梦杰老师，师范类教育专业毕业，曾任多家小学和教育机构机器人教育指导老师，拥有丰富的教学经验。带队获得广东省青少年机器人竞赛机器人综合技能比赛小学组一等奖
                                、并在全国青少年机器人竞赛机器人综合技能比赛中获得二等奖。
                            </p>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="#" class="list">
                        <div class="head">
                            <div class="pic">
                                <img src="/robot/public/static/index/images/ter-head-5.png" />
                            </div>
                        </div>
                        <div class="body">
                            <h2 class="f22 weight center">徐东侠</h2>
                            <h3 class="center">机器人·编程金牌讲师</h3>
                            <p>徐老师是电气工程及其自动化专业毕业，从事机器人教育多年，教学认真负责，善于营造轻松的课堂气氛，语言简洁易懂，深受孩子们喜爱。徐老师有丰富的课程开发和教学经验，先后完成机械课程、电气课程、智能课程等研发，并负责新教师专业技术知识及教学能力的培训，是一个综合能力较强的教师。
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
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w1.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w2.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w3.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w4.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w5.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w6.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w7.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w8.png" />
                </div>
                <div class="swiper-slide"><img src="/robot/public/static/index/images/w9.png" />
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
                <img src="/robot/public/static/index/images/pic9.jpg" />
                <p>粤港澳创客大赛启动会</p>
            </a>
            <!-- 右边 -->
            <div class="flex2 column">
                <!-- 上边 -->
                <div class="flex h27">
                    <a class="flex2"> <img src="/robot/public/static/index/images/pic10.jpg" />
                        <p>广东实验中学科技体验活动</p>
                    </a>
                    <a class="flex1"> <img src="/robot/public/static/index/images/pic11.jpg" />
                        <p>中山大学附属中学科技体验活动</p>
                    </a>
                </div>
                <!-- 下边 -->
                <div class="flex h27">
                    <a class="flex1"> <img src="/robot/public/static/index/images/pic12.jpg" />
                        <p>中国电信科技体验活动</p>
                    </a>
                    <a class="flex2"> <img src="/robot/public/static/index/images/pic13.jpg" />
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
                    <img src="/robot/public/static/index/images/con5_16.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_17.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_13.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_11.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_12.png">
                </li>
            </ul>
            <ul class="fr_logo contentWidth">


                <li>
                    <img src="/robot/public/static/index/images/con5_09.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_10.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_18.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_19.png">
                </li>
                <li>
                    <img src="/robot/public/static/index/images/con5_20.png">
                </li>
            </ul>
        </div>
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
    <!-- 悬浮条 -->
<div class="layerfrom">
    <form action="" method="post">
        <div class="contentWidth white layerfrom_con">
            <div>
                <img src="/robot/public/static/index/images/layerlogo.png" />
            </div>
            <div class="textright">
                <p>免费领取</p>
                <p class="jiazhi"><span>价值</span><em>388</em><span>元试听课</span></p>
            </div>
            <div class="input">
                <div class="text_input phone">
                    <img src="/robot/public/static/index/images/ban-icon-phone.png" />
                    <input type="text" class="text" placeholder="请输入11位手机号" name="c_phone"/>
                </div>
                <div class="text_input">
                    <img src="/robot/public/static/index/images/ban-icon-user.png" />
                    <input type="text" class="text" placeholder="孩子姓名" name="c_name" />
                </div>
                <div class="text_input">
                    <img src="/robot/public/static/index/images/ban-icon-user.png" />
                    <input type="text" class="text" placeholder="孩子年龄" name="c_age" />
                </div>
            </div>
            <div>
                <button class="white f18" id="submit2">免费领取体验课</button>
            </div>
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
                    <p>海客总部：</p>
                    <p>广州市天河区棠东东路3号远洋创意园205-206单元</p>
                </dd>
                <dd>
                    <p>广州（体育西校区）：</p>
                    <p>广东省广州市天河区体育西路107号盛雅商务中心A座二楼H单元</p>
                </dd>
                <dd>
                    <p>广州（珠江新城校区）：</p>
                    <p>广州市天河区兴盛路10号隽峰苑一期3楼334-335</p>
                </dd>
                <dd>
                    <p>长沙（湖南总部）：</p>
                    <p>长沙市开福区金泰路与网船班路交汇处世纪云中心三楼</p>
                </dd>
                <dd>
                    <p>番禺（番禺万翔教育校区）：</p>
                    <p>广州市番禺区沙湾镇福涌村福北路559号</p>
                </dd>
                <dd>
                    <p>广州（南沙海阅万科校区）：</p>
                    <p>广州市南沙区进港大道碧桂园天玺湾1号门旁</p>
                </dd>
                <dd>
                    <p>增城（增城凤凰城旗舰校区）：</p>
                    <p>广东省广州市增城区凤凰城凤荔苑商业中心一楼海客智能机器人</p>
                </dd>
                <dd>
                    <p>增城（增城敏锐校区）：</p>
                    <p>广东省广州市增城区新塘镇新都盛世名门会所1楼</p>
                </dd>
                <dd>
                    <p>珠海（香洲凤凰校区）：</p>
                    <p>广东省珠海市香洲区香榭路33好正方优和汇红荔5层</p>
                </dd>
                <dd>
                    <p>东莞（东莞南城校区）：</p>
                    <p>东莞市南城街道西平景荣路3号财津8号广场5楼501变更东莞市南城西平财津科技产业园B座309</p>
                </dd>
                <dd>
                    <p>中山（中山校区）：</p>
                    <p>中山市小榄镇天奕星河cococity漫街二层1卡1号楼梯</p>
                </dd>
                <dd>
                    <p>深圳（龙岗校区）：</p>
                    <p>深圳市龙岗区平安里二路3-114</p>
                </dd>
                <dd>
                    <p>中山（火炬黄冈校区）：</p>
                    <p>广东省中山市火炬开发区东镇大道4号</p>
                </dd>
                <dd>
                    <p>茂名（电白优学教育校区）：</p>
                    <p>茂名电白区岭门镇汉山路1号</p>
                </dd>
                <dd>
                    <p>惠州（惠城邦德校区）：</p>
                    <p>惠州市惠城区旭日路2号文岭西堤花园邦德教育</p>
                </dd>
                <dd>
                    <p>佛山（禅城爱科教育校区）：</p>
                    <p>佛山市禅城区湖景路亚艺二街恒福湖景湾90号海客机器人学习中心</p>
                </dd>
                <dd>
                    <p>荆州（荆州校区）：</p>
                    <p>荆州市沙市区北京路与红门路交汇处万家福超市二层</p>
                </dd>
                <dd>
                    <p>永州（蓝山巴仑思校区）：</p>
                    <p>湖南省永州市蓝山县南平路120号三楼</p>
                </dd>
                <dd>
                    <p>广西（桂林圆梦兴安校区）：</p>
                    <p>广西壮族自治区 桂林市兴安县兴安县兴安银杏广场</p>
                </dd>
                <dd>
                    <p>湖州（长兴维多利校区）：</p>
                    <p>浙江省 湖州市 长兴县 雉城街道人民广场艺术馆二楼</p>
                </dd>
                <dd>
                    <p>衡阳（祁东校区）：</p>
                    <p>湖南省衡阳市祁东县楚杰路79号</p>
                </dd>
                
                </dl>

                <!-- 公众号，二维码 -->
					<div class="public_number">
                    <div class="erweima">
                        <img src="/robot/public/static/index/images/erweima.png" />
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

<script src="/robot/public/static/admin/js/jquery.min.js"></script>
<script src="/robot/public/static/index/js/swiper.min.js" defer></script>
<script src="/robot/public/static/layer/layer.js" defer></script>
<script src="/robot/public/static/index/js/ajax.js"></script>
<script src="/robot/public/static/index/js/public.js" defer></script>

<script src="/robot/public/static/admin/js/amazeui.min.js" defer></script>

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
    url: "/robot/public/static/index/js/navjson.json",
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
<script src="/robot/public/static/index/js/rem.js"></script>
</body>

<script src="/robot/public/static/index/js/isMobile.js"></script>
<script>
    window.onload = function () {
        var arr = [];
        $(".swiper-wrapper .body").each(function () {
            arr.push($(this).height())
        })
        function getMax(h) {
            var max = undefined;
            for (var i = 0; i < arr.length; i++) {
                max = max === undefined ? arr[i] : (max > arr[i] ? max : arr[i])
            }
            return max;
        }
        var num = getMax(arr);
        $(".swiper-wrapper .body").height(num)
    }

</script>
<script src="/robot/public/static/index/js/title.js" defer></script>

</html>