<?php
$con = mysqli_connect("localhost", "root", "", "myDB");
if (!$con) {
    die("连接失败了铁汁" . mysqli_error($con));
}
$sql = "insert into Websites(web_name,url,alexa,country)
values('google','www.google.com',1,'usa'),
('淘宝','www.taobao.com',4,'cn'),
('facebook','www.facebook.com',5,'usa')";

if($con->query($sql) === true){
    echo "成功了铁汁";
}else{
    echo "失败了铁汁".mysqli_error($con);
}

mysqli_close($con);