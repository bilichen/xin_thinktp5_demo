<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        \think\config::load(APP_PATH.'../config/abc/config.php');
//        return config('abc_name');
        dump(\think\config::get());
    }

    public function add($n=0,$m=0){

        return '$n + $m ='.($n+$m);
    }
}
