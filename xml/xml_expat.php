<?php
///XMl 指可扩展标记语言
/// 被设计用来传输和存储数据
///
///Expat解析器使PHP中处理XML文档成为可能
///
///初始化XML解析器
///
/// Expat是基于事件的解析器。将xml文档视为一系列的事件。当某个具体事件发生时。解析器会调用函数来处理
$parse = xml_parser_create();
function start($parser, $element_name, $element_attrs)
{
    switch ($element_name) {
        case 'NOTE':
            echo "---NOTE--<br>";
            break;
        case "TO":
            echo "TO:";
            break;
        case "FROM":
            echo "FROM:";
            break;
        case "BODY":
            echo "Message:";
    }
}

function stop($parser, $element_name)
{
    echo "<br>";
}

function char($parser, $data)
{
    echo $data;
}

xml_set_element_handler($parse, "start", "stop");

//处理数据
xml_set_character_data_handler($parse, "char");

$fp = fopen("test.xml", "r");

while ($data = fread($fp, 4096)) {
    ///解析xml文件函数
    xml_parse($parse, $data, feof($fp)) or
        die(sprintf("XML error: %s at line %d",
        xml_error_string(xml_get_error_code($parse)),
        xml_get_current_line_number($parse)
    ));
}
xml_parser_free($parse);

///通过xml_parser_create()函数初始化XML解析器
/// 创建配合不同事件来处理程序的函数
/// 添加xml_set_element_handler()函数来定义
/// 添加xml_set_character_data_handler()函数来定义，当解析器遇到字符数据时执行哪个函数
/// 通过xml_parse()函数来解析文件‘text.xml'
/// 万一有错误的话。添加xml_error_string()函数来把XML错误转换为文本说明
/// 调用xml_parser_free()函数来释放分配给xml_parser_create()函数的内存
///
/// DOM解析器使基于树的解析器：这种解析器把xml文档转换为树形结构，他分析整篇文档，。并提供了对树种元素的访问。例如文档对象模型（DOM）
///
/// 初始化xml解析器。加载xml。
$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");
$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $item){
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}

/// CDATA -（未解析）字符数据
/// CDATA部分中的所有内容都会被解析器忽略
/// CDATA 部分由 "<![CDATA[" 开始，由 "]]>" 结束：
///
///CDATA 部分不能包含字符串 "]]>"。也不允许嵌套的 CDATA 部分。
//
//标记 CDATA 部分结尾的 "]]>" 不能包含空格或换行。

///xml文档可以包含非ASCII字符。为了避免错误。需要规定xml编码。或者将xml文件存为Unicode
///