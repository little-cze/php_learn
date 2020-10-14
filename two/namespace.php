<?php
//定义多个命名空间和不包含在命名空间中的代码
// declare(encoding='UTF-8'); 
namespace TwoProject{
const CONNECT = 1;
class Number{
    const num =  1;
     function test(){
        echo "Number里的 函数";
    }
     
};
function test(){
    echo 'test',__LINE__;
}
echo 'twoproject',"<br>";
} 

namespace ThreeProject{
echo 'threeproject',"<br>";
}
//将全局的非命名空间中代码与命名空间中 的代码组合在一起，只能使用大括号形式的语法，全局代码
//必须用一个不带名称的namespace语句加上大括号括起来。
namespace {
$all_variable = "variable";
echo $all_variable,"<br>";
$a = TwoProject\test();
echo $a;
}
 
namespace FourProject{
    class A{
       public function name(){
            echo "<h1>name</h1>";
        }
    }
     function strlen(){
        echo "<h1>fourproject内的strlen函数</h1>";
    }
    A::name();
    strlen();
     echo \strlen('adfa');
     include 'example1.php';
     echo constant('constname'), "<br>"; 
     echo '"',__NAMESPACE__,'"';

     //动态创建名称
     function getName($classname){
         $a = __NAMESPACE__.'=>'.$classname;
         return $a;
     }
    echo getName("haha");
}
///使用命名空间 
namespace foo{
    echo "<h1>foo</h1>";
    use FourProject as obj;
    

}
?>
