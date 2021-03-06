<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * 简单请求
 */
Route::get('/tender', ['as' => 'ttt', function(){
    return '标书列表';
}]);

/**
 * POST请求
 */
Route::post('/tender/create', function(){
    return '创建标书';
});

/**
 * 路由中带有参数
 */
Route::get('/tender/{tid}', function($tid){
    return '标书ID:'.$tid;
});

/**
 * 带有两个参数
 */
Route::get('/tender/{post}/comments/{comment}', function($postId, $commentId){
    return '标书:'.$postId.'评论:'.$commentId;
});

Route::get('/driver/{name?}', function ($name = null) {
    return $name;
});

/**
 * 正则表达式
 */
Route::get('/driver/{name}', function ($name = '老王') {
    return '司机名称:'.$name;
})->where('name', '[A-Za-z]+');

Route::get('/driver/{id}', function($id){
    return '司机编号:'.$id;
})->where('id', '[0-9]+');

Route::get('/driver/{id}/{name}', function ($id, $name) {
    return '司机编号:'.$id.'司机姓名'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);