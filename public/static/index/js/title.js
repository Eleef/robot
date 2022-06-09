

//title
var url = window.location.href;

//2--课程介绍
var introduce = 'introduce';
if(url.indexOf(introduce)>=0){
	document.title = '海客智能机器人-课程介绍';
}

//3--产品介绍
var product = 'product';
if(url.indexOf(product)>=0){
	document.title = '海客智能机器人-产品介绍';
}

var competition = 'competition';
if(url.indexOf(competition)>=0){
	document.title = '海客智能机器人-机器人竞赛';
}

var joinin = 'joinin';
if(url.indexOf(joinin)>=0){
	document.title = '海客智能机器人-招商加盟';
}

var news = 'news';
if(url.indexOf(news)>=0){
	document.title = '海客智能机器人-公司资讯';
}

var industry = 'industry';
if(url.indexOf(industry)>=0){
	document.title = '海客智能机器人-行业资讯';
}

var Achievements = 'Achievements';
if(url.indexOf(Achievements)>=0){
	document.title = '海客智能机器人-教学成果';
}

var about = 'about';
if(url.indexOf(about)>=0){
	document.title = '海客智能机器人-关于我们';
}