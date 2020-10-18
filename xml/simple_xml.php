<?php

///PHP SimpleXML处理最普通的XML任务。其他的任务则交由其他扩展处理
///
/// 元素被转换为 SimpleXMLElement 对象的单一属性。当同一级别上存在多个元素时，它们会被置于数组中。
//属性通过使用关联数组进行访问，其中的索引对应属性名称。
//元素内部的文本被转换为字符串。如果一个元素拥有多个文本节点，则按照它们被找到的顺序进行排列。
//当执行类似下列的基础任务时，SimpleXML 使用起来非常快捷：
//
//读取/提取 XML 文件/字符串的数据
//编辑文本节点或属性
///然而，在处理高级 XML 时，比如命名空间，最好使用 Expat 解析器或 XML DOM。
$xml = simplexml_load_file("test.xml");
print_r($xml);
echo "<br>";
echo $xml->to . "<br>";
///获取子节点的元素名称
echo $xml->getName() ."<br>";
foreach ($xml->children() as $child){
    echo $child->getName() . ":" . $child . "<br>";
}