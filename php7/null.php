<?php

///PHP7新增的NULL合并运算符??
/// 用于执行isset（）检测的三元运算的快捷方式
/// isset检测变量是否已设置并且非null
///
$a = 10;
var_dump($a ?? "a");
var_dump($a ?: "b");

$b = false;
var_dump($b ?? "b");
var_dump($b ?: "b");