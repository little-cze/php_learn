<?php
///PHP MySQL Where字句
/// 用于过滤记录 用于提取满足指定标准的记录
///
$conn = mysqli_connect("localhost", "root", "", "myDB");

if (mysqli_connect_error()) {
    die("连接出错啦" . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM mytable where id= 1");
while ($row = mysqli_fetch_array($result)) {
    echo "ID = " . $row["id"] . "==" . $row['firstname'] . "==" . $row['lastname'] . "<br>";
}
mysqli_close($conn);