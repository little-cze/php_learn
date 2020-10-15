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