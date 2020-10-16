<?php
#从数据库读取文件
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);

if(mysqli_connect_error()){
    die("出错啦！" . mysqli_connect_error());
}

$sql = "select id,firstname,lastname,email from mytable";
$result = $conn->query($sql);

if($result->num_rows>0){
    //将数据写入文件
    $file = fopen("demo.txt","w+") or exit("Unable to open file!");
    while ($row = $result->fetch_assoc()){
        $data = "id:" . $row["id"] . "-Name:" . $row["firstname"] . $row["lastname"]."\n";
        fwrite($file,$data);
        echo "id:" . $row["id"] . "-Name:" . $row["firstname"] . $row["lastname"] . $row['email']."<br>";
    }
    fclose($file);
}else{
    echo "0 结果";
}
mysqli_close($conn);