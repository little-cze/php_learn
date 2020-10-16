<?php

///Order by关键词
/// 用于对记录集中的数据进行排序
///
///默认升序排序。
/// DESC降序排序
///
$conn = mysqli_connect("localhost","root","","myDB");
if(mysqli_connect_error()){
    die("出错啦" . mysqli_connect_error());
}

$result = mysqli_query($conn,"select * from mytable order by id desc ");

while($row = mysqli_fetch_array($result)){
    echo $row['firstname'] . $row['lastname'] . "<br>";
}
mysqli_close($conn);