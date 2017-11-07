<?php

namespace app\index\controller;

class Test{
    function add($n=0,$m=0){
        echo 111;die;
        return $n.'+'.$m.'='.($n+$m);
    }
}