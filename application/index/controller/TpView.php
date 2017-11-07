<?php

namespace app\index\controller;

use think\View;

class TpView{
    //tp5中三种视图显示模式
    public function index(){
        echo 111;die;
        //1、第一种对象模式
        $view = new View();
        return $view->fetch('obj','对象视图模式');
    }
}