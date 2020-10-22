<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function test1(){
        phpinfo();
    }
    public function test2(){
        echo "test2";
    }
    public function add(){
        //定义关联操作的表
       $result = DB::table("member") -> insert([
           'id' => 121123 ,
            'firstname' => '马冬梅',
            'age' => '19',
            'email' => 'dongmei@qq.com'
        ]);
       echo $result;

       $db = DB::table('member');
      $back = $db -> insertGetId([
          'id' => 132 ,
          'firstname' => '马冬梅',
          'age' => '19',
          'email' => 'dongmei@qq.com'
      ]);
      var_dump($back);
    }
    public function del(){
$db = DB::table("member");
$result = $db->where("id","<","10")->delete();
var_dump($result);
    }
    public function update(){
        $db =  DB::table('member');
        $result = $db -> where('id','>','1')->update([
            'firstname' => '勾8牛',
            'email'=>'gou8niu@qq.com'
        ]);
        var_dump($result);
        //返回的数字代表受到的影响行数
    }
    public function select(){
        $db = DB::table("member");
      $data = $db->get();
      foreach ($data as $key => $value){
          echo "ID:" . $value->id . "名字:" . $value->firstname . "email:" . $value->email ."<br>";
      }
      $data2 = $db->where("id",">","100")->where("age","<","23")->get();
      echo $data2;

      $data3 = $db->where("id",">","100")->orWhere("age",">","12")->get();
      echo $data3;

      //分页
      $data4 = $db->first();
      var_dump($data4);
      $data5 = $db->offset(0)->limit(3)->get();
      $data6 = $db->offset(3)->limit(3)->get();
      echo $data5;
      echo $data6;
    }
}
