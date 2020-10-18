<?php
$con = mysqli_connect("localhost","root","","myDB");
if(!$con){
    die("连接失败了铁汁" . $con);
}

$sql = "create table Websites(
id int(5) unsigned auto_increment primary key,
web_name varchar(20) not null,
url varchar(30) not null,
alexa varchar(20),
country varchar(20)
);";

if($con->query($sql) === true){
    echo "创建成功";
}else{
    echo "创建失败了铁汁" . mysqli_error($con);
}

mysqli_close($con);