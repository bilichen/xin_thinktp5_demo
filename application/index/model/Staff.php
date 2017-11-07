<?php
namespace app\index\model;
use think\Model;

class Staff extends Model{

    //读取器（当对象调用数据表同名字段时，会自动调用此方法）
    protected function getSalaryAttr($salary,$data){

        return $data['name'].'的工资是：'.$salary.'元!';
    }
    //修改器（当对象save()方法修改数据时，会自动调用此方法）
    protected function setSalaryAttr($salary){

        return 1111;//返回的值，替代传过来的值，可以能过此方法，做些函数调用
    }
}
