<?php

///Closure::call()
/// 将一个闭包函数动态绑定到一个新的对象实例并调用执行该函数
///更好的性能
///
class Ac{
    private $x = 1;
}
$getX = function (){
    return $this->x;
};
echo $getX->call(new Ac());
//echo $getX->bindTo(new Ac(),"Ac");
