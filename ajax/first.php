<?php
    ///ajax是一种无须重新加载整个网页的情况下。能够更新部分网页的技术
///
$q = isset($_GET['q'])?intval($_GET["q"]):"";

if(empty($q)){
    echo "请选择一个网站：";
    exit();
}

$con = mysqli_connect("localhost","root","","myDB");
if(!$con){
    die("could not connect:".mysqli_error($con));
}
//设置编码，防止中文乱码
mysqli_set_charset($con,"utf-8");

$sql = "select * from Websites where id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>网站名</th>
<th>网站 URL</th>
<th>Alexa 排名</th>
<th>国家</th>
</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['web_name'] . "</td>";
    echo "<td>" . $row['url'] . "</td>";
    echo "<td>" . $row['alexa'] . "</td>";
    echo "<td>" . $row['country'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);