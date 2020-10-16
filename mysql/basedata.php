<?php

///数据库
    // echo phpinfo();

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //创建连接
    $conn = new mysqli($servername,$username,$password);

    //检测连接
    if(mysqli_connect_error()){
        die("连接失败：".mysqli_connect_error());
    }
    //创建数据库
    $sql = "create database myDB1";
    if($conn->query($sql) === TRUE){
        echo "数据库创建成功";
    }else{
        echo "Error==》》".$conn->error;
    }
 
   
    mysqli_close($conn);
