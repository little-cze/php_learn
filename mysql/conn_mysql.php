<?php
///连接数据库
///
$conn = new mysqli("localhost","root","","myDB");
if(mysqli_connect_error()){
    die("出错了铁汁".mysqli_connect_error());
}