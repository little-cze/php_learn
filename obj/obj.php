<?php
    ///面向对象
    class Site{

          ///构造函数 主要用来再创建对象时初始化对象，即为对象成员赋初始值。在创建对象的语句中与new运算符一起使用
    // void __construct([mixed $arg[,$...]])
    function Site($par1,$par2){
        $this->url = $par1;
        $this->title = $par2;
        print("1");
    }
        var $title;
        var $url;
        function func(){
            echo "func";
        }
        function getUrl(){
            echo $this->url . PHP_EOL;
        }
        function setTitle($par){
            $this->title = $par;
        }
        function getTitle(){
            echo $this->title.PHP_EOL;
        }
    }
///使用new来实例化对象
    $asite = new Site("1","2");
    $bsite = new Site("2","3");
    $csite = new Site("3","4");

    //调用成员函数 
///PHP函数和类名不区分大小写。
    $asite->getTitle();
    $bsite->getTitle();
    $csite->getTitle();
echo "==>>>";
$a = array(
    'a',
    
    3 => 'b',
    1 => 'c',
    'd',
    'r'
);
    echo $a[5];

    
?>
<?php
///析构函数
    //与构造函数相反，当对象结束其生命周期时，系统自动执行析构函数。    

    // void __destruct(void)
    class MyDemoClass{
        var $name;
        
        function __construct() {
            echo nl2br("构造函数\n") ; 
            $this->name = "MyDestructableClass";
        }
     
        function __destruct() {
            print "销毁 " . $this->name . "\n<br>";
        }
    }
    $a =new MyDemoClass();

?>
    <?php
    class MyException extends Exception
    {
    }
    try {
        throw new MyException('Oops!');
    } catch (Exception $e) {
        echo "Caught Exception\n";
    } catch (MyException $e) {
        echo "Caught MyException\n";
    }
    ?>

    <?php
     
    // include_once '../demo.php';
        $str = 'a\\b\n';
        $str2 = "a\\b\r\n";
        echo $str2;
        echo $str;
        echo "<br>==============<br>";
    ?>
    <?php
        ///类只能单继承。接口可以多继承

        
        interface B{
            const strb = "接口B中的常量strb";
            
           public function b();
        }
        echo B::strb;
         
        interface C{
            function c();
        }
        interface D extends B,C {
            function d();
        }

        ///类中必须实现接口中定义的所有方法，否则会报一个致命错误。
        class A implements D{
            function b(){
                echo "<br>A重写了B类中的b方法<br>";
            }
            function c(){
                echo "A中重写了C接口的方法<br>";
            }
            function d(){
                echo "A中重写了D接口的方法<br>";
            }
        }
        $d = new A();

        $a =  $d::b();
        $b =  $d::c(); 
        $c =  $d::d();
        $list = ["1","2","3","4"];
        var_dump($list);
        echo "<br>";
        
        foreach($list as $a)
            echo "$a";
    ?>

    <?php
        ///抽象类 abstract 
        //定义为抽象的类不能被实例化。继承一个抽象类的时候，自雷必须定义父类中所有抽象方法，另外，这些方法的访问控制必须和父类中一样。或者更宽松。。

        abstract class AbstractClass{

            function __construct(){
                echo "<br>===>>父类的构造方法<br>";
            }

            ///强制子类要定义这些方法
            abstract protected function abstractFun();

            //普通 方法
            public function narmalFun(){
                echo "普通方法1";
            }
            public function narmalFun2(){
                echo "普通方法2";
            }
        }

        class CreateClass extends AbstractClass{

            // PHP在子类要执行父类的构造方法，需要在子类的构造方法中调用parent::__construct();
            function __construct(){
                parent::__construct();
                echo "===>>子类的构造方法";
            }

            ///static关键字。。可以不实例化而直接访问
            public static $one_static = "foo";

            function abstractFun($name = "."){
                echo "可以增加父类没有的可选参数$name";
                echo "实现了继承的抽象类中的抽象方法".$name;
            }
            function narmalFun(){
                echo "重写了抽象类中的普通方法";
            }
            final public static function test(){
                echo "用final修饰的方法。不能被覆盖";
            }
        }
        final class FinalClass{
            function finalfun(){
                echo "用final修饰的类的方法";
            }
        }

        // class ExtendsFinalClass extends FinalClass{
            // echo "用final修饰的类不能被继承";
        // }
        /// 没有实例化直接访问
        echo CreateClass::$one_static . PHP_EOL;

        $a = new CreateClass();
        echo "<br>";
        $a::narmalFun();
        echo "<br>";
        $a->narmalFun2();
        echo "<br>";
        $a->abstractFun();
        echo "<br>";
        ///final关键字 如果父类方法生命为final。则子类无法覆盖改方法，如果一个类声明为final，则不能被继承

        

    
    ?>