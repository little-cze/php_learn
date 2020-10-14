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
            public $public = "public";
            protected $protected = "protected";
            private $private = "private";
           public function b();
        }
        echo B::strb;
         
        interface C{
            function c();
        }
        interface D extends B,C {
            function d();
        }
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