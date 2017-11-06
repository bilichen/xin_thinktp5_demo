<?php
namespace app\etu\controller;

class Testaa{
    public function demo1($name='天龙',$lesson=0){
//        dump(111);die;
        return '我是'.$name.'正在学习'.$lesson;
    }
}