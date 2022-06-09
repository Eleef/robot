 

function href() {
    //title
    var href = window.location.href;
    //2--课程介绍
    var introduce = 'introduce';
    if (href.indexOf(introduce) >= 0) {
        $(".navtextul >li:eq(1) a").css({
            "color": "#25a4bb"
        })
    }

    // 3--产品介绍
    var product = 'product';
    if (href.indexOf(product) >= 0) {
        $(".navtextul > li:eq(2) a").css({
            "color": "#25a4bb"
        })
    }

    var competition = 'competition';
    if (href.indexOf(competition) >= 0) {
        $(".navtextul> li:eq(3) > a").css({
            "color": "#25a4bb"
        })
    }

    var joinin = 'joinin';
    if (href.indexOf(joinin) >= 0) {
        $(".navtextul> li:eq(4)>  a").css({
            "color": "#25a4bb"
        })
    }

    var news = 'news';
    if (href.indexOf(news) >= 0) {
        $(".navtextul >li:eq(5)>  a").css({
            "color": "#25a4bb"
        })
    }

    var industry = 'industry';
    if (href.indexOf(industry) >= 0) {
        $(".navtextul> li:eq(6) > a").css({
            "color": "#25a4bb"
        })
    }

    var Achievements = 'Achievements';
    if (href.indexOf(Achievements) >= 0) {
        $(".navtextul >li:eq(6) > a").css({
            "color": "#25a4bb"
        })
    }

    var about = 'about';
    if (href.indexOf(about) >= 0) {
        $(".navtextul >li:eq(7)>  a").css({
            "color": "#25a4bb"
        })
    }
}
 

// $.ajax({
//     url: "http://www.hh-tech.cn/index/index/banner",
//     type: "POST",
//     data: "",
//     async: false,
//     dataType: "json",
//     success: function(data) {
//         console.log(data)
//         var banner = "";
//         $.each(data, function(i) {
//             banner += '<div class="indexbanner swiper-slide"><img src="upload/' + data[i].image + '"/></div>';
//         });
//         $('#swiper-wrapper-index').html(banner);

//     }
// });