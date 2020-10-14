<?php
    namespace MyProject;
    ///定义代码在'MyProject'命名空间中

    echo '命名空间为："', __NAMESPACE__, '"',"<br>";
  //1.用户编写的代码与PHP内部的类。函数。常量或第三方类。函数。常量之间的冲突
  //2.为很长的标识符名称创建一个别名。提高代码的可读性。
  //3.namespace必须放在代码前面。
  //4.使用大括号形式。
  //5.将全局的非命名空间的代码与命名空间的代码组合在一起，只能使用大括号形式的语法。全局代码必须用一个不带名称的namespace语句加上大括号括起来。。

    $x = 5;
    $y = 10;
    function myTest($d){
        echo "传进来的变量为：$d<br>";
        static $x,$y;
        static $c;
        $c++;
        echo "c的值为：$c<br>";
        //PHP将所有全局变量存储在一个名为$GLOBAlS[index]的数组中，index保存变量的名称，这个数组可以在函数内部访问，也可以直接用来更新全局变量 
        //static 使局部变量不会被删除
        global $a,$b;
        $z; 
        $y = $x + $y;
        echo "局部变量的y ：：$y<br>";
    }
    myTest(1);
    myTest(2);
    myTest(3);
    echo $y;
    echo "<h1>
        PHP有四种不同的变量作用域<br>
        local global static parameter
    </h1>";
    // echo $z; ///

    //函数内。局部变量的优先级要高于全局变量。。
    echo 'echo','和','print','的区别',"<br>",'echo没有返回值',"<br>";
   $f = print("print的返回值总为");
   echo $f ;

   $cars = array('abc','def');
   print("数组里第一个元素为：{$cars[0]}<br>"); 
   echo ("数组里第2个元素为：{$cars[1]}<br>");
   var_dump(0==false);
   echo "<br>";
   //define 定义常量
   define('WUHU','ahahha');
   echo WUHU;

   echo strlen("php str length");
   echo strpos("hello ,worldwor","wor");

   var_dump(intdiv(19,2));
   echo "<br>";
   $q = 10;
   $p = 10;
   var_dump($q == $p);
   var_dump($q === $p);
   function dem ($a){
        global $q;
        $p = 10;
        var_dump($q === $p);
        var_dump($a === $p);
   }
   dem($q);
   
   ///PHP超级全局变量  
   ///$GLOBALS   包含了全部变量的全局组合数组。变量的名字就是数组的键，。
   ///$_SERVER  包含了诸如头信息，路径，脚本位置等等信息的数组。
   echo $_SERVER['PHP_SELF'],"<br>";
   echo $_SERVER['SERVER_NAME'],"<br>";
   echo $_SERVER['HTTP_HOST'],"<br>";
   echo $_SERVER['SCRIPT_NAME'],"<br>";
   echo $_SERVER['HTTP_USER_AGENT'],"<br>"; 
//    $_REQUEST 用于收集HTML表单提交的数据
   ///$_POST 被应用于收集表单数据
   ///$_GET
   ///$_FILES
//    $_ENV
//    $_COOKIE
//    $_SESSION
 
 
?>
 