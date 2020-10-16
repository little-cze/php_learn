<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);

if(mysqli_connect_error()){
    die("连接失败" . mysqli_connect_error());
}

 ///创建表
 $tab = "create table mytable(
    id int(5) unsigned auto_increment primary key,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    email varchar(50),
    reg_data timestamp
)";

if($conn->query($tab) === TRUE){
    echo "Table create successfully";
}else{
    echo "创建数据表错误：" . $conn->error;
}

mysqli_close($conn);
