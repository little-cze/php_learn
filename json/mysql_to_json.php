<?php
    class TableData{
        public $firstname = "";
        public $lastname = "";
        public $email = "";
    }
    $e = new TableData();
    $arr = array();
    $conn = new mysqli("localhost","root","","myDB");
    if(mysqli_connect_error()){
        die("出错了铁汁".mysqli_connect_error());
        }
    $sql = "select * from mytable";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        echo "查找成功";
       while ($row = mysqli_fetch_array($result)){
           $e->firstname = $row['firstname'];
           $e->lastname = $row['lastname'];
           $e->email = $row['email'];

           array_push($arr,json_encode($e));
       }
       echo "<br> 将数据添加到arr数组中<br>";
       var_dump($arr);

    }else{
        echo "数据为0";
    }

    mysqli_close($conn);