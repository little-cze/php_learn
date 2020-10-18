<?php
    //标量类型声明
//strict_types 1表示严格类型校验模式。作用于函数调用和返回语句 ；0表示弱类型校验模式
//    declare(strict_types=0); 默认

    ///强制模式  默认
//    function sum(float ...$ints){
//        return array_sum($ints);
//    }
//    print(sum(2,'3',4.1));

    ///严格模式
        declare(strict_types=1);
        ///对于严格模式。定义float的时候。可以传入int而不会报错
        function sum(float ...$ints){
            return array_sum($ints);
        }

        print(sum(1,3,4));

        //返回类型声明
    function returnType(int $val):int{
        return ++$val;
    }
    print(returnType(123));

    function voidType() : void{
        print("这是一个没有返回值的方法");
    }

    voidType();

