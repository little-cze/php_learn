<?php
///创建person表
///
$conn = new mysqli("localhost","root","","myDB");

if(mysqli_connect_error()){
    die("连接失败" . mysqli_connect_error());
}

$sql = "create table person(
    id int(5) unsigned auto_increment primary key,
    username varchar(20) not null,
    age int(3),
    sex varchar(2)
)";
if($conn->query($sql) === TRUE){
    echo "table create table success";
}else{
    echo "error:" . $conn->error;
}

mysqli_close($conn);
