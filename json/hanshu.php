<?php
///json函数
/// json_encode json_decode json_last_error
///
$arr = array('a'=> 1,'b'=>'num','c'=>"name",'d'=>true);
$json_data =  json_encode($arr);
echo $json_data . "<br>";

class encodeClass{
    public $str = "";
    public $age = "";
    public $email = "";
}
$obj = new encodeClass();
$obj->str="cze";
$obj->email = "1750456942@qq.com";
$obj->age =18;
$json_encode_obj = json_encode($obj); ///将对象进行json转换
echo $json_encode_obj . "<br>";

///json_string 待解码的json字符串，必须是UTF-8编码数据
/// ASSOC当该参数为true时，将返回数组，false返回对象
/// depth：整数类型的参数。它指定递归深度
/// options：二进制编码。
$json_decode_list = json_decode($json_data,true);
$json_decode_obj = json_decode($json_encode_obj);
var_dump($json_decode_list);
echo "<br>";
var_dump($json_decode_obj);
