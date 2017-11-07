<?php
namespace app\index\controller;
use think\config;
use think\Db;
use app\index\model\Staff;
class Index
{
    public function index()
    {
//        config::load(APP_PATH.'../config/abc/config.php');
////        return config('abc_name');
////        config::set('test','我是天龙');
//        $conf = [
//                'name'=>'天龙',
//                'age'=>18,
//        ];
//        Config('user',$conf);
//       return config('user.name');
//        dump(config::get());
        return 11;
    }

    //thinkphp默认连接数据库方法
    public function dbDemo1(){
        $link = Db::connect();//获取连接对象，以连接上配置中的数据库tp5
        $result = $link->table('staff')->select();
        dump($result);
    }
    //model模型调用数据库方法(增)
    public function model_create(){
        //1、模型对象调用增加
//        $staff = new Staff();
//        $data = [
//            'name'=>'扬康',
//            'age' => 26,
//            'salary' => 5000,
//            'dept' =>'保安部'
//        ];
//       $result =  $staff->save($data);
//        dump($result);

        //2、静态调用增加
        $data1 = [
            'name'=>'郭靖',
            'age' => 26,
            'salary' => 6000,
            'dept' =>'保安部'
        ];
        $result1  = Staff::create($data1);
        dump($result1);
    }
    //model模型调用数据库方法(改)
    public function model_updata(){
        //1、对象调用
        $staff = new Staff();
        $data = [
//            'id'=>13,
            'name'=>'郭靖4',
            'age'=>27,
        ];
        $where =[
            'id'=>13,
        ];
        $staff->save($data,$where);//如果没有$where，刚要在save前面加上isUpdata(true)提示当前为更新操作

        //2、静态调用修改
//        Staff::update($data,$where);
    }
    //model模型调用数据库方法(查)
    public function model_find(){
        //1、对象调用
//        $staff = new Staff();
//        $where = ['id'=>5];
//        $result = $staff->where($where)->find();
//        dump($result->getData());

        //静态调用
        $where =['id'=>['>',4]];
//        $where = function($query){
//            $query->where('id','>',3);
//        };
        $result = Staff::all($where);
        dump($result);
    }

    //model模型调用数据库方法(删)
    public function model_del(){
        //1、对象调用
//        $staff = new Staff();
//        $where = ['id'=>11];
//        $result = $staff->where($where)->delete();
//        dump($result);

        //2、静态调用
        $where = ['id'=>12];
        Staff::destroy($where);
    }

    //model模型读取器demo
    public function model_read(){
        $where = ['id'=>4];
        $staff = Staff::find($where);
        return $staff->salary;
    }
    //model模型修改器demo
    public function model_write(){
        $staff = new Staff();
        $data = [
            'name'=>'扬康',
            'age' => 26,
            'salary' => 5000,
            'dept' =>'保安部'
        ];
        $result =  $staff->save($data);
        dump($result);
    }

}
