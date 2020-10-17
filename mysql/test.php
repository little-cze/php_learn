<?php
/// 增删改查
///
$conn = new mysqli("localhost","root","","myDB");
if(mysqli_connect_error()){
    die("连接出错了铁汁！" . mysqli_connect_error());
}
$add = "insert into mytable(firstname,lastname,email)
values('cze','cz','123')";
if($conn->query($add) === TRUE){
    echo "增加成功" . "<br>";
}else{
    echo "增加出错了铁汁".$conn->error;
}
$del = "delete from mytable where firstname = 'cze'";
if($conn->query($del) === TRUE){
    echo "删除成功" . "<br>";
}else{
    echo "删除出错了铁汁";
}
$update = "update mytable set firstname = 'liangzai' where id = 5";
if($conn->query($update) === true){
    echo "更新成功啦铁汁" . "<br>";
}else{
    echo "更新失败了铁汁";
}
$sel = "select * from mytable";
$result = mysqli_query($conn,$sel);
if($result->num_rows>0){
    while($row = mysqli_fetch_array($result)){
        echo "==》》" . $row['firstname'];
    }
}else{
    echo "查看失败了铁汁";
}
mysqli_close($conn);