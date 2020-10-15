<?php
    ///数组操作
    $list = ["a","b","c","d"];
    $list1 = [["a","b","c","d"],["a","b","c","d"],["a","b","c","d"],["a","b","c","d"]]; 
    $list2 = ["1","2","3","4"];
    echo "<br>";
    echo $list[0].$list[1].$list[2];
    echo "<br>";
    var_dump(array_change_key_case($list));
    echo "<br>"; 
    var_dump(array_chunk($list,2));
    echo "<br>";
    var_dump(array_column($list1,0));
    echo "<br>";
    //创建一个新数组。取一个数组的键和另一个数组的值。
    var_dump(array_combine($list,$list1));
    echo "<br>";
    //只能计算STRING和INTEGER值！返回一个数组。键为旧数组的值，值为旧数组值出现的次数。
    var_dump(array_count_values($list));
    echo "<br>";
    //返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意和 array_diff() 不同的是键名也用于比较。
    var_dump(array_diff_assoc($list,$list));
    //返回一个数组。包含了所有出现在array1并同时出现在其他所有参数数组中的键名和值
    var_dump(array_intersect_key($list,$list));
    echo "<br>";
    function add($num){ 
        return $num++;
    }
    function sum($count,$num){
        return $count+=$num;
    }
    var_dump(array_filter($list2,"add"));
    echo "<br>";
    //交换数组的键和值
    var_dump(array_flip($list));
    echo "<br>";
    var_dump(array_key_exists("1",$list));
    array_key_first($list1);//获取第一个键值。
    array_key_last($list);//获取最后一个键值。
    array_keys($list);//如果指定了可选参数 search_value，则只返回该值的键名。否则 input 数组中的所有键名都会被返回。可选是否严格比较===
    array_map('add',$list);//为数组的每个元素应用回调函数
    var_dump(array_merge_recursive($list,$list1));//递归地合并一个或多个数组
    array_merge($list,$list);//合并一个或多个数组
    //如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将 不会 覆盖原来的值，而是附加到后面。
    array_multisort($list,$list1);///对多个数组或多维数组进行排序
    array_pad($list,10,"ha");///以指定长度将一个值填充进数组
    array_pop($list);
    echo "<br>";
    var_dump(array_product($list2)); //计算数组中所有值的乘积 => int(24)
    array_push($list,"awo");
    echo "<br>";
    var_dump(array_rand($list,2));
    echo "<br>";
    var_dump(array_reduce($list2,"sum"));//用回调函数迭代的将数组简化为单一的值 => int(10)
    echo "<br>";
    array_reverse($list);//返回单元顺序相反的数组
    array_search("a",$list);//在数组中搜索给定的值。成功则返回首个相应的键名
    array_shift($list);//将数组开头的单元移除数组
    var_dump(array_splice($list,1));//从数组中取出一段 
    array_sum($list2);
    array_unique($list);//取出数组中重复的值
    array_unshift($list,"f",'i');
    array_values($list);//返回数组所有的值
    echo "<br>";
    $sweet = array('a' => 'apple', 'b' => 'banana');
    $fruits = array('sweet' => $sweet, 'sour' => 'lemon');
    function test_print($item, $key)
    {
        echo "$key holds $item<br>";
    }
    array_walk_recursive($fruits, 'test_print');
    function oll($item,$val){
        $item = "a$val";
        echo $item."<br>";
    }
    array_walk($list,"oll");//使用户自定义函数对数组中的每个元素做回调处理
    arsort($list);//对数组进行逆向排序并保持索引关系
    asort($list);//对数组进行排序
    rsort($list);//对数组进行逆向排序
    sort($list,SORT_NATURAL | SORT_FLAG_CASE);//对数组进行排序
    foreach ($list as $key => $val) {
        echo "list[" . $key . "] = " . $val . "<br>";
    }
// SORT_REGULAR - 正常比较单元（不改变类型）
// SORT_NUMERIC - 单元被作为数字来比较
// SORT_STRING - 单元被作为字符串来比较
// SORT_LOCALE_STRING - 根据当前的区域（locale）设置来把单元当作字符串比较，可以用 setlocale() 来改变。
// SORT_NATURAL - 和 natsort() 类似对每个单元以“自然的顺序”对字符串进行排序。 PHP 5.4.0 中新增的。
// SORT_FLAG_CASE - 能够与 SORT_STRING 或 SORT_NATURAL 合并（OR 位运算），不区分大小写排序字符串。
    krsort($list);
    ksort($list);//对数组按照键名进行排序
    list(,,$a) = $list;//把数组里的值给一组变量
    echo $a;
    natcasesort($list);///自然排序算法对数组进行不区分大小写字母的排序
    natsort($list);
    next($list);//将数组中的内部指针向前移动一位
    prev($list);//将数组的内部指针倒回一位
    reset($list);//将数组的内部指针指向第一个单元
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 8, 2) as $number) {//根据范围创建数组，包含指定的元素
    echo $number;
}
shuffle($list);///打乱数组
sizeof($list);

function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
///使用用户自定义的比较函数对数组中的值进行排序并保持索引关联 
uasort($list2,"cmp");
print_r($list2);

//使用用户自定义的比较函数对数组中的键名进行排序
uksort($list,"cmp");

///使用用户自定义的比较函数对数组中的值进行排序
usort($list,"cmp");

 
///多维数组
$cars = array
(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100)
);
echo "<br>";
print_r($cars);
echo $cars[0][0];
 