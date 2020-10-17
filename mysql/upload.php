<?php

///更新
///
$con = mysqli_connect("localhost","root","","myDB");
if(mysqli_connect_error()){
    echo "出错了".mysqli_connect_error();
}
$sql = "update mytable set name=cze where first id = 1";
mysqli_query($con,$sql);

$sel = "select * from mytable";
$result = $con->query($sel);
if($result-> num_rows> 0){
    while($row=$result->fetch_assoc()){
        echo $row["firstname"] . "<br>";
    }
}else{
    echo "Error:出错了铁汁";
}

mysqli_close($con);