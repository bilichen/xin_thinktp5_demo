<?php
namespace app\index\controller;
use think\config;
use think\Db;
use app\index\model\Staff;
class Index
{
    public function index()
    {
        config::load(APP_PATH.'../config/abc/config.php');
//        return config('abc_name');
//        config::set('test','我是天龙');
        $conf = [
                'name'=>'天龙',
                'age'=>18,
        ];
        Config('user',$conf);
//       return config('user.name');
        dump(config::get());
    }

    //thinkphp默认连接数据库方法
    public function dbDemo1(){
        $link = Db::connect();//获取连接对象，以连接上配置中的数据库tp5
        $result = $link->table('staff')->select();
        dump($result);
    }
    //model模型调用数据库方法(增)
    public function model_create(){
        $staff = new Staff();
        $data = [
            'name'=>'乔锋',
            'age' => 30,
            'salary' => 8000,
            'dept' =>'保安部'
        ];
       $result =  $staff->create($data);
        dump($result->getData());

    }
}
