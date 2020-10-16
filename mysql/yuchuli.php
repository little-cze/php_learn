<?php
    //使用预处理语句
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if(mysqli_connect_error()){
        die("连接失败" . mysqli_connect_error());
    }
    $sql = "insert into mytable(firstname,lastname,email)
    values(?,?,?)";

    //为mysqli_stmt_prepare()初始化statement对象
    $stmt = mysqli_stmt_init($conn);

    ///预处理语句
    if(mysqli_stmt_prepare($stmt,$sql)){
        //绑定参数
        // i - 整数
        // d - 双精度浮点数
        // s - 字符串
        // b - 布尔值
        mysqli_stmt_prepare($stmt,'sss',$firstname,$lastname,$email);

        //设置参数并执行
        $firstname = 'john';
        $lastname = 'Doe';
        $email = 'a@example.com';
        mysqli_stmt_execute($stmt);

        $firstname = 'john';
        $lastname = 'Doe';
        $email = 'a@example.com';
        mysqli_stmt_execute($stmt); $firstname = 'john';

        $lastname = 'Doe';
        $email = 'a@example.com';
        mysqli_stmt_execute($stmt);

        echo "插入成功";
        $stmt->close();
        $conn0>close();
    }