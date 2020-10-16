<?php
    $name = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
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
    values('$name','$lastname','$email')";

    if($conn->query($sql) === TRUE){
        echo "插入成功";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);