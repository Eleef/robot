  (function(){
    let num = document.getElementsByTagName('img').length;
    let img = document.getElementsByTagName("img");
    let n = 0; //存储图片加载到的位置，避免每次都从第一张图片开始遍历
    lazyload(); //页面载入完毕加载可是区域内的图片
     window.onscroll = lazyload;
    function lazyload() { //监听页面滚动事件
        let seeHeight = document.documentElement.clientHeight; //可见区域高度
        let scrollTop = document.documentElement.scrollTop || document.body.scrollTop; //滚动条距离顶部高度
        for (let i = n; i < num; i++) {
            // 图片未出现时距离顶部的距离大于滚动条距顶部的距离+可视区的高度
            if (img[i].offsetTop < seeHeight + scrollTop) {
                if (img[i].getAttribute("src") == "") {
                    img[i].src = img[i].getAttribute("data-src");
                }
                n = i + 1;
            }
        }
    }
    })()


var mySwiper = new Swiper('.swiper-container-index', {
	loop: true,
	speed: 1200,
	autoplay: {
		disableOnInteraction: false,
		delay: 3500,
	},
	pagination: {
		el: '#bannerpagination,.swiper-pagination',
		clickable: true,
	},
});

var swiper = new Swiper('.swiper-container-ter', {
	paginationClickable: true,
	slidesPerView: 3,
	spaceBetween: 50,
	loop: true, 
	autoplay: {
		delay: 3000,
		stopOnLastSlide: true,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-ter.swiper-button-next',
		prevEl: '.swiper-button-ter.swiper-button-prev',
	},
	breakpoints: {
		1024: {
			slidesPerView: 2,
			spaceBetween: 40
		},
		768: {
			slidesPerView: 1,
			spaceBetween: 30
		}
	}
});

var certifySwiper = new Swiper('#certify .swiper-container', {
	watchSlidesProgress: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true, 
	autoplay: {
		delay: 3000,
		stopOnLastSlide: true,
		disableOnInteraction: false,
	},
	loopedSlides: 5,
	navigation: {
		nextEl: '#certify .swiper-button-next',
		prevEl: '#certify .swiper-button-prev',
	},
	on: {
		progress: function (progress) {
			for (i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i);
				var slideProgress = this.slides[i].progress;
				modify = 1;
				if (Math.abs(slideProgress) > 1) {
					modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
				}
				translate = slideProgress * modify * 120 + 'px';
				scale = 1 - Math.abs(slideProgress) / 5;
				zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
				slide.transform('translateX(' + translate + ') scale(' + scale + ')');
				slide.css('zIndex', zIndex);
				slide.css('opacity', 1);
				if (Math.abs(slideProgress) > 3) {
					slide.css('opacity', 0);
				}
			}
		},
		setTransition: function (transition) {
			for (var i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i)
				slide.transition(transition);
			}

		}
	}

})

var indexvideo = ['/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4',
'/static/index/video/d61f94001a461b23fe181da64816408a.mp4']
var video = '';

for(var i=0;i<indexvideo.length;i++){
	video += '<div class="swiper-slide">';
	video +='<video controls="controls">';
	video +='<source src="'+indexvideo[i]+'" type="video/mp4">';
	video +='您的浏览器不支持 video 标签。';
	video +='</video>';
	video +='</div>';
}
$("#video .videoswiper").append(video);
var audios = document.getElementsByTagName("video");
// 暂停函数
function pauseAll() {
    var self = this;
    [].forEach.call(audios, function (i) {
        // 将audios中其他的audio全部暂停
        i !== self && i.pause();
		video.autoplay.stop();
    })
}
// 给play事件绑定暂停函数
[].forEach.call(audios, function (i) {
    i.addEventListener("play", pauseAll.bind(i));
})
var video = new Swiper('#video .swiper-container', {
	watchSlidesProgress: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true, 
	autoplay: {
		delay: 4000,
		stopOnLastSlide: true,
		disableOnInteraction: false,
	},
	loopedSlides: 5,
	lazyLoading : true,
	navigation: {
		nextEl: '#video .swiper-button-next',
		prevEl: '#video .swiper-button-prev',
	},
	on: {
		progress: function (progress) {
			for (i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i);
				var slideProgress = this.slides[i].progress;
				modify = 1;
				if (Math.abs(slideProgress) > 1) {
					modify = (Math.abs(slideProgress) - 1) * 0.15 + 1;
				}
				translate = slideProgress * modify * 300 + 'px';
				scale = 1 - Math.abs(slideProgress) / 5;
				zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
				slide.transform('translateX(' + translate + ') scale(' + scale + ')');
				slide.css('zIndex', zIndex);
				slide.css('opacity', 1);
				if (Math.abs(slideProgress) > 3) {
					slide.css('opacity', 0);
				}
			}
		},
		setTransition: function (transition) {
			for (var i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i)
				slide.transition(transition);
			}

		}
	}

})
var flag = true;
$("#navM").click(function(){
	if (flag) {
		$(".navtext").show();
		$("body").css({"overflow":"hidden","height":"100%"})
		flag = false;
	  } else {
		$(".navtext").hide();
		$("body").css({"overflow":"auto","height":"auto"})
		flag = true;
	  }
})


$(document).ready(function() {
    $(window).scroll(function() {
        if($(document).scrollTop() >= $(document).height() - $(window).height()-537) {
            // console.log("滚动条已经到达底部为" + $(document).scrollTop());
            $(".layerfrom").css({"position":"absolute","bottom":"50px"})
        }else{
            $(".layerfrom").css({"position":"fixed","bottom":"0"})
        }
    });
});


