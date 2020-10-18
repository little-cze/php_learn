<?php

///支持用new class实例化一个匿名类
///
///
/// 类中必须实现接口中定义的所有方法        继承一个抽象类的时候，子类必须定义父类中的所有抽象方法
interface Logger{
    public function log(string $msg);
}

class Application{
    private $logger;
    public function setLogger(Logger $logger){
         $this->logger = $logger;
    }
    public function getLogger(){
        return $this->logger;
    }
}

$app = new Application();
$app->setLogger(new class implements Logger{
    public function log(string $msg){
        // TODO: Implement log() method.
        print $msg;
    }
});

$app->getLogger()->log("输出");