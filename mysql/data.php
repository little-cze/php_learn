<?php
    ///插入数据
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    $conn = new mysqli($servername,$username,$password,$dbname);

    if(mysqli_connect_error()){
        die("连接失败" . mysqli_connect_error());
    }
    $sql = "insert into mytable(firstname,lastname,email)
    values($_POST['fname'],$_POST['age'],'mikeD@example.com')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);