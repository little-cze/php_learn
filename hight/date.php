<?php
    ///date()函数的第一个必需参数format规定了如何格式化日期、时间

    echo date("Y-m-d H:i:s") . "<br>";

    ///include require语句
//  require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。
// include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。

///文件处理  =>>fopen()

$file = fopen("demo.txt","r") or exit("无法打开文件");
// r	只读。在文件的开头开始。
// r+	读/写。在文件的开头开始。
// w	只写。打开并清空文件的内容；如果文件不存在，则创建新文件。
// w+	读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。
// a	追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。
// a+	读/追加。通过向文件末尾写内容，来保持文件内容。
// x	只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
// x+	读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。

//如果fopen（）函数无法打开指定文件。则返回0

///检查文件末尾 feof();
while(!feof($file)){
    ///fgets() 逐行读取文件
    echo fgets($file) . "<br>";

    ///fgetc() 逐个字符读取文件
    echo fgetc($file) . "<br>";
}

///关闭打开的文件
fclose($file);
?>
<?php
///PHP session
// PHPsession 变量用于存储关于用户会话的信息。或者更改用户会话的设置。
// Session变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的
// 工作机制是：为每一个访客创建一个唯一的ID。并基于这个UID来存储变量，UID存储在cookie中。或者通过URL进行传导。

//启动会话
session_start();

// 存储session数据
$_SERVER['views'] = 1;

// 检索session数据
echo $_SESSION['views'];

// 销毁session
unset($_SESSION('views'));
session_destroy();

///mail()函数。。用于从脚本中发送电子邮件
