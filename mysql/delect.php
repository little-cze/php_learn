<?php

///删除
///
$con = mysqli_connect("localhost","root","","myDB");
if(mysqli_connect_error()){
    die("出错了铁汁");
}
$del = "delete from mytable where firstname='mike'";
if($con->query($del) === TRUE){
    echo "删除成功" . "<br>";
}else{
    echo "删除出错啦铁汁@" . $con->error;
}
mysqli_query($con,"delete from mytable where firstname='mike'");

$sql = "select * from mytable";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo $row["id"]."->". $row['firstname'] . $row["email"] ."<br>";
    }
}else{
    echo "数量为0";
}


mysqli_close($con);