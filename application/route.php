<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;
// 手机端访问
Route::domain('m','mobile');
// pc
Route::group('admin',function(){
    Route::rule('/','admin/index/index','get|post');
});
Route::group('admin/login',function(){
    Route::rule('/','admin/login/index','get|post');
    // Route::rule('/','admin/login/login','get|post');
    Route::rule('/','admin/login/logout','get|post');
});

Route::rule('admin/login/login','admin/login/login','get|post');

//  课程名单推送
Route::group('admin/index',function(){
    Route::rule('/','admin/index/index','get|post');
    Route::rule('/auditiondel/:id','admin/index/auditiondel','get|post');
});

// 加盟商名单推送

Route::group('admin/index/index_name',function(){
    Route::rule('/','admin/index/index_name','get|post');
    Route::rule('/joinindel/:id','admin/index/joinindel','get|post');
});

Route::group('admin/joinin',function(){
    Route::rule('/','admin/joinin/index','get|post');
});

// 轮播图
Route::group('admin/banner',function(){
    Route::rule('/','admin/banner/index','get|post');
    Route::rule('/edit/:id','admin/banner/edit','get|post');
    Route::rule('/del/:id','admin/banner/del','get|post');
    Route::rule('/add/:id','admin/banner/add','get|post');
});

// 公司咨询
Route::group('admin/news',function(){
    Route::rule('/','admin/news/index','get|post');
    Route::rule('/:id','admin/news/edit','get|post');
    Route::rule('/del/:id','admin/news/del','get|post');
});

//  行业资讯
Route::group('admin/newsindus',function(){
    Route::rule('/','admin/newsindus/index','get|post');
    Route::rule('/:id','admin/newsindus/edit','get|post');
    Route::rule('/del/:id','admin/newsindus/del','get|post');
});
Route::group('/',function(){
    Route::rule('/','index/index/index','get|post');
});
Route::group('index',function(){
    Route::rule('/','index/index/index','get|post');
});
Route::group('Introduce',function(){
    Route::rule('/','Introduce/index','get|post');
});
Route::group('Product',function(){
    Route::rule('/','Product/index','get|post');
});
Route::group('Competition',function(){
    Route::rule('/','Competition/index','get|post');
});
Route::rule('/Competition/zhjn','Competition/zhjn','get|post');
Route::rule('/Competition/wer','Competition/wer','get|post');
Route::rule('/Competition/vex','Competition/vex','get|post');
Route::rule('/Competition/makex','Competition/makex','get|post');
Route::rule('/Competition/fll','Competition/fll','get|post');
Route::rule('/Competition/cys','Competition/cys','get|post');



Route::group('Joinin',function(){
    Route::rule('/','Joinin/index','get|post');
});

Route::group('news',function(){
    Route::rule('/','News/index','get|post');
    Route::rule('/:id','News/article','get|post');
});

Route::rule('/news/industry','News/industry','get|post');
Route::rule('/news/industry/:id','News/indusarticle','get|post');


Route::group('Achievements',function(){
    Route::rule('/','Achievements/index','get|post');
});


Route::group('About',function(){
    Route::rule('/','About/index','get|post');
});

// mobile
Route::group('mobile',function(){
    Route::rule('/','mobile/index/index','get|post');
});
Route::group('mobile/Introduce',function(){
    Route::rule('/','mobile/Introduce/index','get|post');
});
Route::group('mobile/Product',function(){
    Route::rule('/','mobile/Product/index','get|post');
});
Route::group('mobile/Competition',function(){
    Route::rule('/','mobile/Competition/index','get|post');
});
Route::group('mobile/news',function(){
    Route::rule('/','mobile/news/index','get|post');
    Route::rule('/:id','mobile/News/article','get|post');

});
Route::rule('mobile/news/industry','mobile/News/industry','get|post');
Route::rule('mobile/news/industry/:id','mobile/News/indusarticle','get|post');


Route::rule('mobile/Competition/zhjn','mobile/Competition/zhjn','get|post');
Route::rule('mobile/Competition/wer','mobile/Competition/wer','get|post');
Route::rule('mobile/Competition/vex','mobile/Competition/vex','get|post');
Route::rule('mobile/Competition/makex','mobile/Competition/makex','get|post');
Route::rule('mobile/Competition/fll','mobile/Competition/fll','get|post');
Route::rule('mobile/Competition/cys','mobile/Competition/cys','get|post');




Route::group('mobile/Achievements',function(){
    Route::rule('/','mobile/Achievements/index','get|post');
});

Route::group('mobile/About',function(){
    Route::rule('/','mobile/About/index','get|post');
});









Route::group('mobile/Joinin',function(){
    Route::rule('/','mobile/Joinin/index','get|post');
});
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
];

// Route::rule('News','index/News/Index');
    
