<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:75:"C:\phpStudy\WWW\robot\public/../application/index\view\competition\vex.html";i:1654163826;s:61:"C:\phpStudy\WWW\robot\application\index\view\Common\head.html";i:1654081211;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\header.html";i:1572830715;s:62:"C:\phpStudy\WWW\robot\application\index\view\Common\layer.html";i:1564031755;s:65:"C:\phpStudy\WWW\robot\application\index\view\Common\layerbox.html";i:1565250812;s:63:"C:\phpStudy\WWW\robot\application\index\view\Common\footer.html";i:1654081168;}*/ ?>
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
<script>
    function play_v1(v){
        v.muted=false;
        // v.play();
    }
    $('video').on('canplay', function() {
        $(this).muted = false;
        // v.play();
    });
</script>
<body>
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
    <div class="swiper-container swiper-container-index">
        <div class="swiper-wrapper">
            <div class="indexbanner minw swiper-slide"><img src="/robot/public/static/index/images/banner_competiton1.jpg"/></div>
            <div class="indexbanner minw swiper-slide"><img src="/robot/public/static/index/images/banner_competiton2.jpg"/></div>
            <div class="indexbanner minw swiper-slide"><img src="/robot/public/static/index/images/banner_competiton3.jpg"/></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" id="bannerpagination"></div>
    </div>
    <div class="contentWidth">
        <div class="center tuijian_title">
            <h1>机器竞赛项目介绍</h1>
        </div>
        <div class="am-tabs competition_tab" data-am-tabs>
            <ul class="am-nav am-nav-tabs">
                <li class="am-active"><a href="/competition/vex">VEX</a></li>
                <li><a href="/competition/wer">WER</a></li>
                <li><a href="/competition/zhjn">综合技能</a></li>
                <li><a href="/competition/cys">机器人创意</a></li>
                <!-- <li><a href="/competition/makex">MakeX</a></li> -->
            </ul>
            <div class="am-tabs-bd am-form-group">
                <div class="am-tab-panel am-active">
                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>VEX工程挑战赛</h1>
                        <!-- <video class="WeChatindex" width="640" height="480" onmouseover="play_v1(this)" controls autoplay muted>
                            <source src="/robot/public/static/index/video/VRC2022.mp4" type="video/mp4">
                        </video> -->
                    </div>
                    <video controls="controls"
                        src="/robot/public/static/index/video/VRC2022.mp4"
                        id="web03"
                        autoplay="autoplay"
                        muted
                        preload="metadata"
                        playsinline="true"
                        webkit-playsinline="true"
                        x-webkit-airplay="true"
                        x5-video-orientation="portraint"
                        x5-video-player-fullscreen="true" width="100%" 
                        onmouseover="play_v1(this)"
                        muted
                       >
                    </video>
                    <!-- <video controls autoplay  src="/robot/public/static/index/video/VRC2022.mp4"></video> -->
                    <div class="competition_content am-margin-bottom">
                        <div class="am-padding-vertical-sm clearfix center">
                        </div>
                        <div class="am-margin-vertical-xs">
                            VEX是全球规模最大，最受科技类大学认可的机器人比赛，也是中国青少年机器人竞赛中的重要项目。VEX要求参赛的队员自行设计、制作、编程并调试机器人，比赛不仅考察机器人的结构和传动的设计，更重要的是对机器的操控、比赛的策略及应变能力。比赛分为手动赛和自动赛两部分，在进行15秒的自动赛后，队员通过遥控器控制在特定赛场上的机器人，再按照规则要求进行手动赛。VEX互动性强且具有激烈的对抗性，比赛过程也比较惊险刺激，是创意设计和对抗性比赛的最佳结合。
                        </div>
                    </div>
                    <div class="center tuijian_title am-margin-bottom-lg title-img">
                        <div class="am-margin-right-xs pic">
                            <img src="/robot/public/static/index/images/vex2.jpg" />
                        </div>
                        <h1>VEX世界锦标赛（国际赛路线）</h1>
                    </div>
                    <div class="competition_content am-margin-bottom">
                        <div class="am-margin-vertical-xs">
                            VEX世界锦标赛是全球规模最大，最受科技类大学认可的机器人比赛。截止目前，全美293所大学，为VEX比赛获奖选手提供奖学金，常青藤名校更会对获奖选手提供特别加分。小学、初中、高中都可以参加VEX机器人比赛，获奖选手都将成为世界各地各大名校的宠儿，大学也可以继续参加VEX机器人比赛，很多毕业生都会进入Google等科技公司就业。
                        </div>
                    </div>
                    <table class="public_table">
                        <thead>
                            <tr class="center">
                                <th class="blue">主办单位</th>
                                <th class="blue">参赛组别</th>
                                <th class="blue">参赛项目</th>
                                <th class="blue">参赛人数</th>
                                <th class="blue">机器数量</th>
                                <th class="blue">器材要求</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:100px;" class="center">
                                    <div>
                                        加利福尼亚州立大学（California State University）卡耐基梅隆大学（CMU）等
                                    </div>
                                </td>
                                <td  class="center">
                                    <div>
                                            初中组、高中组、大学组
                                    </div>
                                </td>
                                <td  class="center">
                                    <div>
                                            VEX-EDR、VEX-IQ
                                    </div>
                                </td>
                                <td  class="center">
                                    <div>
                                            每队4名学生
                                    </div>
                                </td>
                                <td  class="center">
                                    <div>
                                            每支队伍1台机器
                                    </div>
                                </td>
                                <td>
                                    <div>
                                            器材机器人必须使用VEX机器人设计系统的主控制器、接收器、VEX手动控制器及配套的VEX器材。供设计和构建机器人所用的电气件和结构部件必须来自组委会认可的正规渠道。
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>世界赛路线比赛时间轴</h1>
                    </div>
                    <table class="public_table public_table_odd">
                        <thead>
                            <tr>
                                <th class="blue">比赛</th>
                                <th class="blue">时间</th>
                                <th class="blue">晋级</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        粤港澳大湾区机器人公开赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        6月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        亚洲青少年机器人锦标赛活动
                                    </div>
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        世界机器人大赛总决赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        7月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        亚洲青少年机器人锦标赛活动
                                    </div>
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                    <div>
                                        中国区选拔赛南大区赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        8月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        亚洲青少年机器人锦标赛活动
                                    </div>
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        中国青少年机器人竞赛暨
                                    </div>
                                    <div>
                                        世界青少年机器人邀请赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        8月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        世界机器人大赛冠军挑战赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        8月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        亚洲青少年机器人锦标赛活动
                                    </div>
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        亚洲青少年机器人锦标赛活动
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        10月
                                    </div>
                                </td>
                                <td>
                                    <div>

                                        亚洲机器人锦标赛
                                    </div>
                                    <div>

                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        亚洲机器人锦标赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        12月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100px;">
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        4月
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        VEX机器人世锦赛
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="widthimg contentWidth am-padding-top">
                        <img src="/robot/public/static/index/images/in2.png" class="pic">
                    </div>
                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>中国青少年机器人竞赛（国家赛路线）</h1>
                    </div>

                    <div class="competition_content am-margin-bottom">
                        <div class="am-margin-vertical-xs">
                            中国青少年机器人竞赛创办于2001年，是中国科协面向全国中小学生开展的一项将知识积累、技能培养、探究性学习融为一体的普及性科技教育活动。竞赛为广大青少年机器人爱好者在电子信息、自动控制以及机器人高新科技领域进行学习、探索、研究、实践搭建成果展示和竞技交流的平台，旨在通过富有挑战性的比赛项目，将学生在课程中的多学科知识和技能融入竞赛过程中，激发学生对工程技术的学习兴趣，培养学生的创新意识、动手实践能力和团队精神，提高科学素质。经过十多年发展，中国青少年机器人竞赛在普及机器人工程技术知识，推动机器人教育活动开展等方面发挥了积极作用，已成为国内面向青少年机器人爱好者所举办的规模最大、管理规范、认可度高、影响广泛的竞赛活动。每年，全国共有9000多支队伍、25000多名中小学生参加各省级青少年机器人竞赛选拔赛，获奖的学员在名校自主招生和升学中获得更多优势。
                        </div>
                    </div>
                    <table class="public_table">
                        <thead>
                            <tr class="center">
                                <th class="blue_q">主办单位</th>
                                <th class="blue_q">参赛组别</th>
                                <th class="blue_q">参赛项目</th>
                                <th class="blue_q">参赛人数</th>
                                <th class="blue_q">机器数量</th>
                                <th class="blue_q">器材要求</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:100px;" class="center">
                                    <div>
                                            中国科学技术协会
                                    </div>
                                </td>
                                <td class="center">
                                    <div>小学组、初中组、高中组</div>
                                </td>
                                <td class="center">
                                    <div>
                                        VEX-EDR
                                    </div>
                                </td>
                                <td class="center">
                                    <div>
                                        每队4名学生
                                    </div>
                                </td>
                                <td class="center">
                                    <div>
                                        每支队伍需2台机器参赛
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        器材机器人必须使用VEX机器人设计系统的主控制器、接收器、VEX手动控制器及配套的VEX器材。供设计和构建机器人所用的电气件和结构部件必须来自组委会认可的正规渠道。
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>国内赛路线比赛时间轴</h1>
                    </div>
                    <div class="widthimg contentWidth">
                        <img src="/robot/public/static/index/images/in3.png" class="pic">
                    </div>
                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>海客VEX竞赛教练团队</h1>
                    </div>
                    <div class="competition_content am-margin-bottom">
                        <div class="am-margin-vertical-xs">
                                海客VEX机器人竞赛教练团队现由6名专职教练组成，在VEX官方赛事、科和电教馆组织的官方赛事均斩获大奖。学员获得2019年世界机器人大会总决赛VEX工程挑战赛全能奖、2019亚洲机器人锦标赛中国南大区选拔赛初中组冠军、十九届中国青少年机器人竞赛小学、高中组二等奖、连续多年获得该项目广东省冠军。
                        </div>
                    </div>

                    <div class="center tuijian_title am-margin-bottom-lg">
                        <h1>海客VEX机器人竞赛部分教学成果</h1>
                    </div>
                    <div class="widthimg contentWidth am-padding-bottom-xl">
                        <img src="/robot/public/static/index/images/in5.png" class="pic">
                    </div>
                    <div class="row competition_bottom">
                        <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                            <img src="/robot/public/static/index/images/vex11.jpg" />
                        </div>
                        <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                            <img src="/robot/public/static/index/images/vex12.jpg" />
                        </div>
                        <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                            <img src="/robot/public/static/index/images/vex13.jpg" />
                        </div>
                        <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                                <img src="/robot/public/static/index/images/vex21.jpg" />
                            </div>
                            <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                                <img src="/robot/public/static/index/images/vex22.jpg" />
                            </div>
                            <div class="am-u-lg-4 am-u-md-4 am-u-sm-4 am-u-xs-12">
                                <img src="/robot/public/static/index/images/vex23.jpg" />
                            </div>
                    </div>
                </div>
            </div>
        </div>
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
<!-- <script>
    window.onload=function (ev) {
        var video = document.getElementById("web03");
        document.addEventListener(
            'WeixinJSBridgeReady',
            function () {
                video.play();
                video.pause();
                video.muted = false;
                video.play();
                video.muted = false;
                
            },
            false
        );
        // document.addEventListener('touchstart', function () {
        //     video.play();
        //     video.pause();
        //     video.play();
        // }, false);
    }
</script> -->

</html>