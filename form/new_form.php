<!DOCTYPE HTML>
<html lang="html">
<head>
    <meta charset="utf-8">
    <title>form</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
// 定义变量并默认设为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$dataname = $dataemil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "名字是必须的。";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
        $nameErr = "只允许字母和空格";
    } else {
        $name = test_input($_POST["name"]);
        $dataname = $name;
    }
    if (empty($_POST["email"])) {
        $emailErr = "邮箱是必须的。";
    } else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["email"])) {
        $emailErr = "非法邮箱格式";
    } else {
        $email = test_input($_POST["email"]);
        $dataemil = $email;
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["website"])) {
        $emailErr = "非法URL";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "性别是必须的。";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function dd(){

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function post_base($firstname,$email)
{
//连接数据库
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if (mysqli_connect_error()) {
        die ("连接出错啦" . mysqli_connect_error());
    }
    $sql = "insert into mytable(firstname,lastname,email)
values('$firstname','last','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "插入成功";
    } else {
        echo "Error:" . $sql . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>

<h2>PHP 表单验证实例</h2>
<p><span class="error">* 必填字段。</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    名字: <label>
        <input type="text" name="name">
    </label>
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail: <label>
        <input type="text" name="email">
    </label>
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    网址: <label>
        <input type="text" name="website">
    </label>
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    备注: <label>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    </label>
    <br><br>
    性别:
    <label>
        <input type="radio" name="gender" value="female">
    </label>女
    <label>
        <input type="radio" name="gender" value="male">
    </label>男
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php


echo "<h2>您的输入:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>