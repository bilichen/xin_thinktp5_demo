<?php

//think\Route::rule('demo1/:name','etu/Testaa/demo1?lesson=php');//路由到控制器的方法
//think\Route::rule('demo2','\app\Test@test');//路由到类的方法
//think\Route::rule('demo',function(){
//    return '我是测试路由到闭包函数';
//});

//think\Route::rule('myjump','http://www.baidu.com');//路由重定向

//路由参数验证1 只在此路由生效
//think\Route::get('test/:name/:age','index/index/test',[],['name'=>'[a-zA-Z]+','age'=>'\d{2}']);

//路由参数验证2 验证方法定义为全局变量，全局有效，但当局部也有同名验证时，以局部优先
//think\Route::pattern([
//    'name'=>'[a-zA-Z]+',
//    'age'=>'\d{2}',
//]);
//think\Route::get('test/:name/:age','index/index/test');

//路由参数验证3 以返回形式定义
//return [
//    '__pattern__'=>[
//        'name'=>'[a-zA-Z]+',
//        'age'=>'\d{2}',
//    ],
//    'test/:name/:age' =>'index/index/test',
//
//];

//别名路由
think\Route::alias('tt1','index/test',['ext'=>'ss']);
